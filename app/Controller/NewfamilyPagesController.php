<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'facebook');
/**
 * NewfamilyPages Controller
 *
 */
class NewfamilyPagesController extends AppController {

	var $uses = array('NewfamilyPage','Profile');

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

        $idf = $this->NewfamilyPage->find('first', array( 'conditions' => array( 'NewfamilyPage.profile_id' =>  $leid ) ) );
        
        if( !empty($idf['NewfamilyPage']['id']) && !is_null($idf['NewfamilyPage']['id'])){
          $this->NewfamilyPage->id = $idf['NewfamilyPage']['id'];
        }

        if(!empty($this->request->data['NewfamilyPage']['photo']['tmp_name']) ) { 

        if (file_exists('http://momtomom.mx/apps/memorias_embarazo/img/cover_photos/'.'newfamily_'.$id['Profile']['uid'].'.png')){
            //"El fichero existe"
            $this->deleteMovedFile('http://momtomom.mx/apps/memorias_embarazo/img/cover_photos/'.'newfamily_'.$id['Profile']['uid'].'.png');
          } 

        $fileName = $this->generateUniqueFilename('newfamily_'.$id['Profile']['uid'].'.png'); 
        $error = $this->handleFileUpload($this->request->data['NewfamilyPage']['photo'], $fileName); 

          if ($error == false) { 
            $this->NewfamilyPage->set(array( 
              'photo' => $fileName
            ));
          }

        } elseif (!empty($this->request->data['NewfamilyPage']['url_photo'])) {
          $avatar = imagecreatefromjpeg($this->request->data['NewfamilyPage']['url_photo']);
          $nameIMG = 'newfamily_'.$uid.'.png';
          if (file_exists('http://momtomom.mx/apps/memorias_embarazo/img/cover_photos/'.$nameIMG)){
            //"El fichero existe"
            $this->deleteMovedFile('http://momtomom.mx/apps/memorias_embarazo/img/cover_photos/'.$nameIMG);
          } 
          imagepng($avatar, WWW_ROOT.'img/cover_photos/'.$nameIMG); 

          $this->NewfamilyPage->set(array( 
            'photo' => $nameIMG
          ));
          
        }

          $this->NewfamilyPage->set(array( 
            'profile_id' => $this->request->data['NewfamilyPage']['profile_id'],
            'description' => $this->request->data['NewfamilyPage']['description']        
          ));

        if ($this->NewfamilyPage->save()) {
          //$this->Session->setFlash(__('The Cover photo has been saved'));
        } else {
          $this->Session->setFlash(__('The Page could not be saved. Please, try again.'));
        }
      }

   	  $this->set('new',$this->NewfamilyPage->find('first', array( 'conditions' => array( 'NewfamilyPage.profile_id' => $leid ) )));
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
   * resample method
   *
   * @return new file name
   */
  protected function resample($jpgFile, $orientation, $nameIMG) { //$thumbFile, $width
    // Get new dimensions
    list($width_orig, $height_orig) = getimagesize($jpgFile['tmp_name']);

    //$height = (int) (($width / $width_orig) * $height_orig);
    // Resample
    $image_p = imagecreatetruecolor($width_orig, $height_orig);
    $image   = imagecreatefromjpeg($jpgFile['tmp_name']);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width_orig, $height_orig, $width_orig, $height_orig);


    // Fix Orientation
    switch($orientation) {
        case 3:
            $image_p = imagerotate($image_p, 180, 0);
            break;
        case 6:
            $image_p = imagerotate($image_p, -90, 0);
            break;
        case 8:
            $image_p = imagerotate($image_p, 90, 0);
            break;
    }
    // Output
    imagejpeg($image_p, WWW_ROOT.'img/cover_photos/'.$nameIMG);
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
      $exif = exif_read_data($fileData['tmp_name']);
        $ort = $exif['Orientation'];
        $ext1 = $fileData['type'];
    
        $image_extensions_allowed_1 = array('image/jpeg', 'image/jpg', 'image/tiff');  

        if(in_array($ext1, $image_extensions_allowed_1)){        
          
          $this->resample($fileData,$ort,$fileName);
          $error = false;

        } else {
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
