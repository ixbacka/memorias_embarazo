<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'facebook');
/**
 * Profiles Controller
 *
 */
class ProfilesController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
//public $scaffold;

	public function beforeFilter() {

		$this->Session->write("facebook", 
			new Facebook(array(
        'appId' => "163480813810636",
        'secret' => "3ccf0a83049aa75bd8f0bc9707b9e7a0",
        'cookie' => true
      ))
    );
	
	}

	/*
	 * fangate()
	 * check if user has liked the page
	 */
	public function fangate(){
		
		$facebook = $this->Session->read("facebook");

		$access_token = $facebook->getAccessToken();
		$signed_request = $facebook->getSignedRequest();
		$like_status = $signed_request["page"]["liked"];

		if ($like_status == TRUE) { 
			//si le gusta! checar si le ha dado permisos ? .........................
			$session = $facebook->getUser();
			$loginUrl = $facebook->getLoginUrl(
			    array(
			        'scope' => 'publish_actions,user_birthday,email,user_photos',
			        'redirect_uri' => 'https://www.facebook.com/pages/Nativo-Desarrollo/514166771955164?id=514166771955164&sk=app_163480813810636'     
			    )
			);

			$me = null;
			$chk=0;
			if ($session) {
		    try {
	        $me = $facebook->api('/me');
	        $permissions = $facebook->api('/me/permissions');

	        if($permissions['data'][0]['publish_actions'] != 1 ) { 
	          $chk=1; 
	        } elseif( is_null($permissions) || empty($permissions) || !isset($permissions)) {
	          $chk=1;
	        }
		    } catch (FacebookApiException $e) {
		        //error_log($e);
		    }
		    if ($chk==1) { 
	        //no le ha dado permisos, redirigir ...  Pedir Permisos
	        echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
		    } else {
	        // ya le dio permisos y ya le dio like ... 
	        $this->Session->write('User.liked', 1);
	        $this->Session->write('User.uid', $session);
	        $this->Session->write('User.token', $access_token);

	        //Redirect to Welcome page // if user saved redirect to cover 
	        //first, lets get the user facebok ID, its in var -> $session

	        $user_saved = $this->Profile->find('count', 
	        array( 
	                'conditions' => array('Profile.uid' => $this->Session->read('User.uid'))
	            )
	        );

	        if($user_saved >= 1){ //user saved, so not welcome page, but cover page
	        	$this->redirect(array('controller' => 'profiles', 'action' => 'cover'));
	        } else {
	        	$this->redirect(array('controller' => 'profiles', 'action' => 'welcome'));
	        }
		    }
			} else {
			  //no le ha dado permisos! 
			  echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
			}       
		} // end of if(like_status == TRUE) 
		else {
			//no ha dado like (?)
			// ver fangate 
			$this->set('liked_status', 0);
		}
	}

	public function cover($theme = null){
		
		$facebook = $this->Session->read("facebook");
		$uid  = $facebook->getUser();

		if($theme != null){ 

			//es la primera vez que van a ver su cover, guardar el tema

			$this->Session->write("User.theme", $theme);

			$user_profile = $facebook->api('/'.$uid.'?fields=id,picture.type(normal),last_name,first_name,email,location,gender,link,birthday,username','GET');

			if( !empty($user_profile["first_name"] ) ){
				$fname = $user_profile["first_name"];
			} else {
				$fname = NULL;
			}
			if( !empty($user_profile["id"] ) ){
				$uidi = $user_profile["id"];
			}else {
				$uidi = NULL;
			}
			if( !empty($user_profile["last_name"] ) ){
				$lname = $user_profile["last_name"];
			}else {
				$lname = NULL;
			}
			if( !empty($user_profile["email"] ) ){
				$email = $user_profile["email"];
			}else {
				$email = NULL;
			}
			if( !empty($user_profile['location']['name'] ) ){
				$loc = $user_profile['location']['name'];
			}else {
				$loc = NULL;
			}
			if( !empty($user_profile["gender"] ) ){
				$gender = $user_profile["gender"];
			}else {
				$gender = NULL;
			}
			if( !empty($user_profile["link"] ) ){
				$link = $user_profile["link"];
			}else {
				$link = NULL;
			}
			if( !empty($user_profile["birthday"] ) ){
				$bday = $user_profile["birthday"];
			}else {
				$bday = NULL;
			}
			if( !empty($user_profile["username"] ) ){
				$usrname = $user_profile["username"];
			}else {
				$usrname = NULL;
			}
			if( !empty($user_profile["picture"]["data"]["url"] ) ){
				$avi = $user_profile["picture"]["data"]["url"];
			}else {
				$avi = NULL;
			}
			
			//guardar selected theme!
			$this->Profile->create();
			
			$this->Profile->set(array( 
        'theme' => $theme,
        'uid' => $uidi,
        'name' => $fname,
        'email' => $email,
        'username' => $usrname,
        'lastname' => $lname,
        'location' => $loc,
        'birthday' => $bday,
        'link' => $link,
        'created' => date('Y-m-d H:i:s')
      ));
      
      
      if ($this->Profile->save()) {
        $id = $this->Profile->id;
      } else {
        $this->Session->setFlash(__('Tu perfil no se ha podido guardar.'));
      }

		}
		// ya han entrado antes a la pagina. Mostrar cover, si elige una coverphoto debemos guardarla
		if ($this->request->is('post') || $this->request->is('put')) {
      
      if( $this->Session->read('User.uid') ){
      	$id = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' =>  $this->Session->read('User.uid') ) ) );
      } else {
      	$id = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' => $uid ) ) );
      }

      $this->Profile->id = $id['Profile']['id'];
      $error = true;

      if(!empty($this->request->data['Profile']['file']['tmp_name']) ) { 

			  $fileName = $this->generateUniqueFilename($this->request->data['Profile']['file']['name']); 
			  $error = $this->handleFileUpload($this->request->data['Profile']['file'], $fileName); 

			  if ($error == false) { 
				  $this->generate_image_thumbnail(WWW_ROOT.'img/cover_photos/'.$fileName,WWW_ROOT.'img/cover_photos/'.$fileName);
					
					$this->Profile->set(array( 
						'cover_photo' => $fileName
					));
					
		      if ($this->Profile->save()) {
		        //$this->Session->setFlash(__('The Cover photo has been saved'));
		      } else {
		        $this->Session->setFlash(__('The Cover photo could not be saved. Please, try again.'));
		      }
				}

			} elseif (!empty($this->request->data['Profile']['url_photo'])) {

				$avatar = imagecreatefromjpeg($this->request->data['Profile']['url_photo']);
				$nameIMG = 'cover_photo_'.$uid.'.png';
        imagepng($avatar, WWW_ROOT.'img/cover_photos/'.$nameIMG); 

        $this->Profile->set(array( 
					'cover_photo' => $nameIMG
				));
				
	      if ($this->Profile->save()) {
	        //$this->Session->setFlash(__('The Cover photo has been saved'));
	      } else {
	        $this->Session->setFlash(__('The Cover photo could not be saved. Please, try again.'));
	      }

			} 			
    }	
 
    if( $this->Session->read('User.uid') ){
    	$id = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' =>  $this->Session->read('User.uid') ) ) );
    } else {
    	$id = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' => $uid ) ) );
    }

    if( $id['Profile']['cover_photo'] != null && !empty($id['Profile']['cover_photo']) ){
	    $this->set('cover_pic', $id['Profile']['cover_photo']); 
    }

	}

	public function welcome(){

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
    $THUMBNAIL_IMAGE_MAX_WIDTH = 392;

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
