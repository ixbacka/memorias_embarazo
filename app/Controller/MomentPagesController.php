<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'facebook');

/**
 * MomentPages Controller
 *
 */
class MomentPagesController extends AppController {
	var $uses = array('MomentPage','Profile');

	public function beforeFilter() {
		$this->Session->write("facebook", 
			new Facebook(array(
        'appId' => "163480813810636",
        'secret' => "3ccf0a83049aa75bd8f0bc9707b9e7a0",
        'cookie' => true
      ))
    );	
	}

  public function index($uid){
    //$facebook = $this->Session->read("facebook");
    //$uid  = $facebook->getUser();

     //if( $this->Session->read('User.uid') ){
      //  $id = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' =>  $this->Session->read('User.uid') ) ) );
      //} else {
        $id = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' => $uid ) ) );
      //}

      $leid = $id['Profile']['id'];

     $momentos = $this->MomentPage->find('all', array( 'conditions' => array( 'MomentPage.profile_id' => $leid ) ));
      if ($this->request->is('requested')) {
          return $momentos;
      } else {
        $this->set('moments', $momentos);
      }
  }


	/*
	 * tiene que guardar el momento , profile_id y trimestre
	 */
	public function add($id = null, $trim = null){
		$facebook = $this->Session->read("facebook");
		$uid  = $facebook->getUser();

		 if( $this->Session->read('User.uid') ){
      	$idp = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' =>  $this->Session->read('User.uid') ) ) );
      } else {
      	$idp = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' => $uid ) ) );
      }

      $leid = $idp['Profile']['id'];
      
      //got users id, return fields if they full, also, check if post or put and save
      if ($this->request->is('post') || $this->request->is('put')) {

        $momentos = $this->MomentPage->find('count', array( 'conditions' => array( 'MomentPage.profile_id' => $leid ) ));

        if( $momentos > 5 ){

          $answer = 'no';


        } else {

          $answer = 'si';

          $idf = $this->MomentPage->find('first', array( 'conditions' => array( 'MomentPage.id' =>  $id) ) );
          
          if( !empty($idf['MomentPage']['id']) && !is_null($idf['MomentPage']['id'])){
            $this->MomentPage->id = $idf['MomentPage']['id'];
          }

          $error = false;

          if(!empty($this->request->data['MomentPage']['photo']['tmp_name']) ) { 

            $fileName = $this->generateUniqueFilename('MOMENTO_'.$idp['Profile']['uid'].'.png');             
            $error = $this->handleFileUpload($this->request->data['MomentPage']['photo'], $fileName); 

         /* print_r($error);
          print_r($fileName);

          die();*/

            if ($error == false) {               
              $this->MomentPage->set(array( 
                'photo' => $fileName
              ));
              
            }

          } elseif (!empty($this->request->data['MomentPage']['url_photo'])) {
          	$random = substr(number_format(time() * rand(),0,'',''),0,10);
            $avatar = imagecreatefromjpeg($this->request->data['MomentPage']['url_photo']);
            $nameIMG = 'moment_'.$random.'_'.$uid.'.png';
            imagepng($avatar, WWW_ROOT.'img/cover_photos/'.$nameIMG); 

            $this->MomentPage->set(array( 
              'photo' => $nameIMG
            ));


          }

           $this->MomentPage->set(array( 
                'trimester' => $this->request->data['MomentPage']['trimester'],
                'title' => $this->request->data['MomentPage']['title'],
                'description' => $this->request->data['MomentPage']['description'],
                'profile_id' => $this->request->data['MomentPage']['profile_id']
              ));

          if ($this->MomentPage->save()) {
            //$this->Session->setFlash(__('The Cover photo has been saved'));
            if($error!=false){
              $this->Session->setFlash(__($error));              
            }
            $this->redirect(array('controller' => 'moment_pages', 'action' => 'add', $this->MomentPage->id, $trim));
          } else {
            $this->Session->setFlash(__('The Page could not be saved. Please, try again.'));
          }
        }
      }//

      $momentos = $this->MomentPage->find('count', array( 'conditions' => array( 'MomentPage.profile_id' => $leid ) ));

      if( $momentos >
       5 ){
        $answer = 'no';
      } else {
        $answer = 'si';
      }

      if($id != 0){
        $this->set('moment',$this->MomentPage->find('first', array( 'conditions' => array( 'MomentPage.id' => $id ) )));
      } 
		  $this->set('profileid',$leid);
      $this->set('trim',$trim);
      $this->set('mayi',$answer);
	}

  public function howmanymoments($uid = null){
    
    $error = array('mensaje' => 'No puedes agregar otro momento.');

    if($uid != null){     

      $id = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' =>  $uid ) ) );

      $momentos = $this->MomentPage->find('count', array( 'conditions' => array( 'MomentPage.profile_id' =>  $id['Profile']['id'] ) ) );     

      if ($momentos < 5) {
        $error= array('mensaje' => 'successfully');
      } else {
         $error= array('mensaje' => 'No puedes agregar otro momento.');
      }
    }

    header("Content-type: application/json");
    echo json_encode($error);
    exit;

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
