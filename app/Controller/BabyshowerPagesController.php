<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'facebook');
/**
 * BabyshowerPages Controller
 *
 */
class BabyshowerPagesController extends AppController {

	var $uses = array('BabyshowerPage','Profile');

	public function beforeFilter() {
		$this->Session->write("facebook", 
			new Facebook(array(
        'appId' => "163480813810636",
        'secret' => "3ccf0a83049aa75bd8f0bc9707b9e7a0",
        'cookie' => true
      ))
    );
	
	}
	
	public function add(){

		$facebook = $this->Session->read("facebook");
		$uid  = $facebook->getUser();

		 if( $this->Session->read('User.uid') ){
      	$id = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' =>  $this->Session->read('User.uid') ) ) );
      } else {
      	$id = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' => $uid ) ) );
      }

      $leid = $id['Profile']['id'];
      
      //got users id, return fields if they full, also, check if post or put and save
      if ($this->request->is('post') || $this->request->is('put')) {

        $idf = $this->BabyshowerPage->find('first', array( 'conditions' => array( 'BabyshowerPage.profile_id' =>  $leid ) ) );
        
        if( !empty($idf['BabyshowerPage']['id']) && !is_null($idf['BabyshowerPage']['id'])){
          $this->BabyshowerPage->id = $idf['BabyshowerPage']['id'];
        }


        if(!empty($this->request->data['BabyshowerPage']['photo1']['tmp_name']) ) { 

        $fileName = $this->generateUniqueFilename('bbyshower_1_'.$id['Profile']['uid'].'.png'); 
        $error = $this->handleFileUpload($this->request->data['BabyshowerPage']['photo1'], $fileName); 

          if ($error == false) { 
            $this->BabyshowerPage->set(array( 
              'photo1' => $fileName
            ));
          }

        } elseif (!empty($this->request->data['BabyshowerPage']['url_photo_1'])) {
          $avatar = imagecreatefromjpeg($this->request->data['BabyshowerPage']['url_photo_1']);
          $nameIMG = 'bbyshower_1_'.$uid.'.png';
          imagepng($avatar, WWW_ROOT.'img/cover_photos/'.$nameIMG); 

          $this->BabyshowerPage->set(array( 
            'photo1' => $nameIMG
          ));
          
        }

        if(!empty($this->request->data['BabyshowerPage']['photo2']['tmp_name']) ) { 

        $fileName = $this->generateUniqueFilename('bbyshower_2_'.$id['Profile']['uid'].'.png'); 
        $error = $this->handleFileUpload($this->request->data['BabyshowerPage']['photo2'], $fileName); 

          if ($error == false) { 
            $this->BabyshowerPage->set(array( 
              'photo2' => $fileName
            ));
          }

        } elseif (!empty($this->request->data['BabyshowerPage']['url_photo_2'])) {
          $avatar = imagecreatefromjpeg($this->request->data['BabyshowerPage']['url_photo_2']);
          $nameIMG = 'bbyshower_2_'.$uid.'.png';
          imagepng($avatar, WWW_ROOT.'img/cover_photos/'.$nameIMG); 

          $this->BabyshowerPage->set(array( 
            'photo2' => $nameIMG
          ));
          
        }

        if( isset($this->request->data['BabyshowerPage']['favoritepresent']) ){

           $this->BabyshowerPage->set(array( 
            'favoritepresent' => $this->request->data['BabyshowerPage']['favoritepresent']
            ));

        }

           $this->BabyshowerPage->set(array( 
            'bbyshower_date' => $this->request->data['BabyshowerPage']['bbyshower_date'],
            'present1' => $this->request->data['BabyshowerPage']['present1'],
            'present2' => $this->request->data['BabyshowerPage']['present2'],
            'present3' => $this->request->data['BabyshowerPage']['present3'],
            'profile_id' => $this->request->data['BabyshowerPage']['profile_id'],
            'guest1' => $this->request->data['BabyshowerPage']['guest1'],
            'guest2' => $this->request->data['BabyshowerPage']['guest2'],
            'guest3' => $this->request->data['BabyshowerPage']['guest3'],
          ));


        if ($this->BabyshowerPage->save()) {
          //$this->Session->setFlash(__('The Cover photo has been saved'));
        } else {
          $this->Session->setFlash(__('The Page could not be saved. Please, try again.'));
        }


      }


   	  $this->set('bbyshower',$this->BabyshowerPage->find('first', array( 'conditions' => array( 'BabyshowerPage.profile_id' => $leid ) )));
	    $this->set('profileid',$leid);
	}




 /**
   * generateUniqueFilename method
   *
   * @return new file name
   */

  protected function generateUniqueFilename($fileName, $path=''){ 
    $path = empty($path) ? WWW_ROOT.'img/cover_photos/' : $path; 
    $no = 1; 
    $newFileName = $fileName; 
    while (file_exists("$path/".$newFileName)) { 
      $no++; 
      $newFileName = substr_replace($fileName, "_$no.", strrpos($fileName, "."), 1); 
    } 
    return $newFileName; 
  } 

  /**
   * handleFileUpload method
   *
   * @return BOOL
   */
  function handleFileUpload($fileData, $fileName){
    $image_extensions_allowed = array('jpg', 'jpeg', 'png', 'gif','tiff', 'bmp', 'ttf', 'otf');  
    $error = true; 

    //Get file type 
    $typeArr = explode('/', $fileData['type']); 
    
    $ext = strtolower(substr(strrchr($fileName, "."), 1));
    

    //If size is provided for validation check with that size. Else compare the size with INI file 
    if (($this->validateFile['size'] && $fileData['size'] > $this->validateFile['size']) || $fileData['error'] == UPLOAD_ERR_INI_SIZE) 
    { 
      $error = 'File is too large to upload'; 
    } elseif(!in_array($ext, $image_extensions_allowed)){

        $exts = implode(', ',$image_extensions_allowed);
        $error = ' ojo: '.$ext.' = '.$fileName." You must upload a file with one of the following extensions: ".$exts;
      } elseif ($this->validateFile['type'] && (strpos($this->validateFile['type'], strtolower($typeArr[1])) === false)) { 
      //File type is not the one we are going to accept. Error!! 
      $error = 'Invalid file type'; 
    } else { 
      //Data looks OK at this stage. Let's proceed. 
        if ($fileData['error'] == UPLOAD_ERR_OK) { 
        //Oops!! File size is zero. Error! 
            if ($fileData['size'] == 0) { 
                $error = 'Zero size file found.'; 
            } else { 
                if (is_uploaded_file($fileData['tmp_name'])) 
                { 
                    //Finally we can upload file now. Let's do it and return without errors if success in moving. 
                    if (move_uploaded_file($fileData['tmp_name'], WWW_ROOT.'img/cover_photos/'.$fileName) == true) 
                    { 
                        $error = false; 
                    } else {
                      $error = true; 
                    }
                } else { 
                    return true; 
                } 
            } 
        } 
    } 
    return $error; 
  }

  /**
   * deleteMovedFile method
   *
   * @return BOOL
   */
  function deleteMovedFile($fileName) 
  { 
    if (!$fileName || !is_file($fileName)){ 
      return true; 
    } 
    if(unlink($fileName)) { 
      return true; 
    } 
    return false; 
  } 

}
