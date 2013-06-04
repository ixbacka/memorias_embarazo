<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'facebook');

/**
 * BellymonthPages Controller
 *
 */
class BellymonthPagesController extends AppController {
	
	var $uses = array('BellymonthPage','Profile');

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

        $idf = $this->BellymonthPage->find('first', array( 'conditions' => array( 'BellymonthPage.profile_id' =>  $leid ) ) );
        
        if( !empty($idf['BellymonthPage']['id']) && !is_null($idf['BellymonthPage']['id'])){
          $this->BellymonthPage->id = $idf['BellymonthPage']['id'];
        }


        if(!empty($this->request->data['BellymonthPage']['photo']['tmp_name']) ) { 

        $fileName = $this->generateUniqueFilename($this->request->data['BellymonthPage']['photo']['name']); 
        $error = $this->handleFileUpload($this->request->data['BellymonthPage']['photo'], $fileName); 

          if ($error == false) { 
            $this->BellymonthPage->set(array( 
              'photo' => $fileName
            ));
          }

        } elseif (!empty($this->request->data['BellymonthPage']['url_photo'])) {
          $avatar = imagecreatefromjpeg($this->request->data['BellymonthPage']['url_photo']);
          $nameIMG = 'bellymonth_'.$uid.'.png';
          imagepng($avatar, WWW_ROOT.'img/cover_photos/'.$nameIMG); 

          $this->BellymonthPage->set(array( 
            'photo' => $nameIMG
          ));
          
        }

          $this->BellymonthPage->set(array( 
            'actual_weight' => $this->request->data['BellymonthPage']['actual_weight'],
            'measurements' => $this->request->data['BellymonthPage']['measurements'],
            'apetite' => $this->request->data['BellymonthPage']['apetite'],
            'b4' => $this->request->data['BellymonthPage']['b4'],
            'favoritepresent' => $this->request->data['BellymonthPage']['favoritepresent'],
            'profile_id' => $this->request->data['BellymonthPage']['profile_id'],
            'sleep' => $this->request->data['BellymonthPage']['sleep'],
            'photo_date' => $this->request->data['BellymonthPage']['photo_date']
          ));


        if ($this->BellymonthPage->save()) {
          //$this->Session->setFlash(__('The Cover photo has been saved'));
        } else {
          $this->Session->setFlash(__('The Page could not be saved. Please, try again.'));
        }


      }

   	  $this->set('bellymonth',$this->BellymonthPage->find('first', array( 'conditions' => array( 'BellymonthPage.profile_id' => $leid ) )));
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
