<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'facebook');

/**
 * UltrasoundPages Controller
 *
 */
class UltrasoundPagesController extends AppController {
  var $uses = array('UltrasoundPage','Profile');

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

        $idf = $this->UltrasoundPage->find('first', array( 'conditions' => array( 'UltrasoundPage.profile_id' =>  $leid ) ) );
        
        if( !empty($idf['UltrasoundPage']['id']) && !is_null($idf['UltrasoundPage']['id'])){
          $this->UltrasoundPage->id = $idf['UltrasoundPage']['id'];
        }

        if(!empty($this->request->data['UltrasoundPage']['first_photo']['tmp_name']) ) { 

        $fileName = $this->generateUniqueFilename($this->request->data['UltrasoundPage']['first_photo']['name']); 
        $error = $this->handleFileUpload($this->request->data['UltrasoundPage']['first_photo'], $fileName); 

          if ($error == false) { 
            //$this->generate_image_thumbnail(WWW_ROOT.'img/cover_photos/'.$fileName,WWW_ROOT.'img/cover_photos/'.$fileName);
            
            $this->UltrasoundPage->set(array( 
              'first_photo' => $fileName,
            ));
            
          }

        } elseif (!empty($this->request->data['UltrasoundPage']['url_photo'])) {

          $avatar = imagecreatefromjpeg($this->request->data['UltrasoundPage']['url_photo']);
          $nameIMG = $this->generateUniqueFilename('ultrasound_1_1_'.$uid.'.png'); 
          imagepng($avatar, WWW_ROOT.'img/cover_photos/'.$nameIMG); 

          $this->UltrasoundPage->set(array( 
            'first_photo' => $nameIMG,
          ));
          
        } 

        if(!empty($this->request->data['UltrasoundPage']['second_photo']['tmp_name']) ) { 

        $fileName = $this->generateUniqueFilename($this->request->data['UltrasoundPage']['second_photo']['name']); 
        $error = $this->handleFileUpload($this->request->data['UltrasoundPage']['second_photo'], $fileName); 

          if ($error == false) { 
            //$this->generate_image_thumbnail(WWW_ROOT.'img/cover_photos/'.$fileName,WWW_ROOT.'img/cover_photos/'.$fileName);
            
            $this->UltrasoundPage->set(array( 
              'second_photo' => $fileName,
            ));
            
          }

        } elseif (!empty($this->request->data['UltrasoundPage']['url_photo_1'])) {

          $avatar = imagecreatefromjpeg($this->request->data['UltrasoundPage']['url_photo_1']);
          $nameIMG = $this->generateUniqueFilename('ultrasound_1_2_'.$uid.'.png'); 
          imagepng($avatar, WWW_ROOT.'img/cover_photos/'.$nameIMG); 

          $this->UltrasoundPage->set(array( 
            'second_photo' => $nameIMG,
          ));
          
        }
        
         $this->UltrasoundPage->set(array( 
            'first_date' => $this->request->data['UltrasoundPage']['first_date'],
            'first_week' => $this->request->data['UltrasoundPage']['first_week'],
            'first_notes' => $this->request->data['UltrasoundPage']['first_notes'],
            'second_date' => $this->request->data['UltrasoundPage']['second_date'],
            'second_week' => $this->request->data['UltrasoundPage']['second_week'],
            'profile_id' => $this->request->data['UltrasoundPage']['profile_id'],
            'second_notes' => $this->request->data['UltrasoundPage']['second_notes'],
          ));

        if ($this->UltrasoundPage->save()) {
          //$this->Session->setFlash(__('The Cover photo has been saved'));
        } else {
          $this->Session->setFlash(__('The Page could not be saved. Please, try again.'));
        }

      }

      $this->set('ultrasound',$this->UltrasoundPage->find('first', array( 'conditions' => array( 'UltrasoundPage.profile_id' => $leid ) )));
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

  /*
   * PHP function to resize an image maintaining aspect ratio
   * http://salman-w.blogspot.com/2008/10/resize-images-using-phpgd-library.html
   *
   * Creates a resized (e.g. thumbnail, small, medium, large)
   * version of an image file and saves it as another file
   */
  public function generate_image_thumbnail($source_image_path, $thumbnail_image_path)
  {
    $THUMBNAIL_IMAGE_MAX_WIDTH = 250;

    list($source_image_width, $source_image_height, $source_image_type) = getimagesize($source_image_path);
    switch ($source_image_type) {
      case IMAGETYPE_GIF:
          $source_gd_image = imagecreatefromgif($source_image_path);
          break;
      case IMAGETYPE_JPEG:
          $source_gd_image = imagecreatefromjpeg($source_image_path);
          break;
      case IMAGETYPE_PNG:
          $source_gd_image = imagecreatefrompng($source_image_path);
          break;
    }
    if ($source_gd_image === false) {
      return false;
    }
    $source_aspect_ratio = $source_image_width / $source_image_height;

    if ($source_image_width <= $THUMBNAIL_IMAGE_MAX_WIDTH) {
      $thumbnail_image_width = $source_image_width;
      $thumbnail_image_height = $source_image_height;
    } else {
      $thumbnail_image_width = $THUMBNAIL_IMAGE_MAX_WIDTH;
      $thumbnail_image_height = (int) ($THUMBNAIL_IMAGE_MAX_WIDTH / $source_aspect_ratio);
    }

    $thumbnail_gd_image = imagecreatetruecolor($thumbnail_image_width, $thumbnail_image_height);
    imagecopyresampled($thumbnail_gd_image, $source_gd_image, 0, 0, 0, 0, $thumbnail_image_width, $thumbnail_image_height, $source_image_width, $source_image_height);
    imagejpeg($thumbnail_gd_image, $thumbnail_image_path, 90);
    imagedestroy($source_gd_image);
    imagedestroy($thumbnail_gd_image);
    return true;
  }



}
