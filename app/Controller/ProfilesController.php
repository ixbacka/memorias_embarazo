<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'facebook');
/**
 * Profiles Controller
 *
 */
class ProfilesController extends AppController {
	var $uses = array('Profile','CongratsPage', 'AnimoPage', 'BabyshowerPage', 'BellyPage', 'ByebellyPage', 'BellymonthPage', 'ChildsexPage', 'CoolultrasoundPage', 'EpilogPage', 'FamilytreePage', 'FirstVisitPage', 'FirstkickPage', 'GettingclosePage', 'IlovemybabyPage', 'NestingPage', 'MomentPage', 'NewfamilyPage', 'SintomPage','SpecialdeliveryPage','UltrasoundPage' , 'WelcomebbyPage', 'WhoamiPage');	

 	public $components = array('RequestHandler');

	public function beforeFilter() {

		$this->Session->write("facebook", 
			new Facebook(array(
        'appId' => "163480813810636",
        'secret' => "3ccf0a83049aa75bd8f0bc9707b9e7a0",
        'cookie' => true
      ))
    );
	
	}

	/*para ver el librillo*/

	public function view_book($id = null){

		$profid = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' => $id ) ) );

		$leid = $profid['Profile']['id'];
      	
      	$this->set('animo',$this->AnimoPage->find('first', array( 'conditions' => array( 'AnimoPage.profile_id' => $leid ) )));
   	    $this->set('bbyshower',$this->BabyshowerPage->find('first', array( 'conditions' => array( 'BabyshowerPage.profile_id' => $leid ) )));
	    $this->set('congrats',$this->CongratsPage->find('first', array( 'conditions' => array( 'CongratsPage.profile_id' => $leid ) )));
        $this->set('belly',$this->BellyPage->find('first', array( 'conditions' => array( 'BellyPage.profile_id' => $leid ) )));
   		$this->set('bellymonth',$this->BellymonthPage->find('first', array( 'conditions' => array( 'BellymonthPage.profile_id' => $leid ) )));
    	$this->set('byebelly',$this->ByebellyPage->find('first', array( 'conditions' => array( 'ByebellyPage.profile_id' => $leid ) )));
        $this->set('childsex',$this->ChildsexPage->find('first', array( 'conditions' => array( 'ChildsexPage.profile_id' => $leid ) )));
   	    $this->set('cool',$this->CoolultrasoundPage->find('first', array( 'conditions' => array( 'CoolultrasoundPage.profile_id' => $leid ) )));
   	    $this->set('epilog',$this->EpilogPage->find('first', array( 'conditions' => array( 'EpilogPage.profile_id' => $leid ) )));
        $this->set('familytree',$this->FamilytreePage->find('first', array( 'conditions' => array( 'FamilytreePage.profile_id' => $leid ) )));
        $this->set('firstvisit',$this->FirstVisitPage->find('first', array( 'conditions' => array( 'FirstVisitPage.profile_id' => $leid ) )));
   	    $this->set('firstkick',$this->FirstkickPage->find('first', array( 'conditions' => array( 'FirstkickPage.profile_id' => $leid ) )));
        $this->set('gettingclose',$this->GettingclosePage->find('first', array( 'conditions' => array( 'GettingclosePage.profile_id' => $leid ) )));
        $this->set('ilovemybby',$this->IlovemybabyPage->find('first', array( 'conditions' => array( 'IlovemybabyPage.profile_id' => $leid ) )));
   	    $this->set('nesting',$this->NestingPage->find('first', array( 'conditions' => array( 'NestingPage.profile_id' => $leid ) )));
   	    $this->set('new',$this->NewfamilyPage->find('first', array( 'conditions' => array( 'NewfamilyPage.profile_id' => $leid ) )));

   	    $this->set('momentos',  $this->MomentPage->find('all', array( 'conditions' => array( 'MomentPage.profile_id' => $leid ) ) ));
   		$this->set('sintoms',$this->SintomPage->find('first', array( 'conditions' => array( 'SintomPage.profile_id' => $leid ) )));
   	    $this->set('special',$this->SpecialdeliveryPage->find('first', array( 'conditions' => array( 'SpecialdeliveryPage.profile_id' => $leid ) )));
        $this->set('ultrasound',$this->UltrasoundPage->find('first', array( 'conditions' => array( 'UltrasoundPage.profile_id' => $leid ) )));
   	    $this->set('welcome',$this->WelcomebbyPage->find('first', array( 'conditions' => array( 'WelcomebbyPage.profile_id' => $leid ) )));
        $this->set('whoami',$this->WhoamiPage->find('first', array( 'conditions' => array( 'WhoamiPage.profile_id' => $leid ) )));


		$profid = $this->Profile->find('first', array( 'conditions' => array( 'Profile.id' => $leid ) ) );
	    $this->set('cover_pic', $profid['Profile']['cover_photo']); 
	    $this->set('perfil', $profid); 

	    $this->set('profileid',$leid);

	}


	public function print_book($id = null){

		$leid = $id;
      	
      	$this->set('animo',$this->AnimoPage->find('first', array( 'conditions' => array( 'AnimoPage.profile_id' => $leid ) )));
   	    $this->set('bbyshower',$this->BabyshowerPage->find('first', array( 'conditions' => array( 'BabyshowerPage.profile_id' => $leid ) )));
	    $this->set('congrats',$this->CongratsPage->find('first', array( 'conditions' => array( 'CongratsPage.profile_id' => $leid ) )));
        $this->set('belly',$this->BellyPage->find('first', array( 'conditions' => array( 'BellyPage.profile_id' => $leid ) )));
   		$this->set('bellymonth',$this->BellymonthPage->find('first', array( 'conditions' => array( 'BellymonthPage.profile_id' => $leid ) )));
    	$this->set('byebelly',$this->ByebellyPage->find('first', array( 'conditions' => array( 'ByebellyPage.profile_id' => $leid ) )));
        $this->set('childsex',$this->ChildsexPage->find('first', array( 'conditions' => array( 'ChildsexPage.profile_id' => $leid ) )));
   	    $this->set('cool',$this->CoolultrasoundPage->find('first', array( 'conditions' => array( 'CoolultrasoundPage.profile_id' => $leid ) )));
   	    $this->set('epilog',$this->EpilogPage->find('first', array( 'conditions' => array( 'EpilogPage.profile_id' => $leid ) )));
        $this->set('familytree',$this->FamilytreePage->find('first', array( 'conditions' => array( 'FamilytreePage.profile_id' => $leid ) )));
        $this->set('firstvisit',$this->FirstVisitPage->find('first', array( 'conditions' => array( 'FirstVisitPage.profile_id' => $leid ) )));
   	    $this->set('firstkick',$this->FirstkickPage->find('first', array( 'conditions' => array( 'FirstkickPage.profile_id' => $leid ) )));
        $this->set('gettingclose',$this->GettingclosePage->find('first', array( 'conditions' => array( 'GettingclosePage.profile_id' => $leid ) )));
        $this->set('ilovemybby',$this->IlovemybabyPage->find('first', array( 'conditions' => array( 'IlovemybabyPage.profile_id' => $leid ) )));
   	    $this->set('nesting',$this->NestingPage->find('first', array( 'conditions' => array( 'NestingPage.profile_id' => $leid ) )));
   	    $this->set('new',$this->NewfamilyPage->find('first', array( 'conditions' => array( 'NewfamilyPage.profile_id' => $leid ) )));

   	    $this->set('momentos',  $this->MomentPage->find('all', array( 'conditions' => array( 'MomentPage.profile_id' => $leid ) ) ));
   		$this->set('sintoms',$this->SintomPage->find('first', array( 'conditions' => array( 'SintomPage.profile_id' => $leid ) )));
   	    $this->set('special',$this->SpecialdeliveryPage->find('first', array( 'conditions' => array( 'SpecialdeliveryPage.profile_id' => $leid ) )));
        $this->set('ultrasound',$this->UltrasoundPage->find('first', array( 'conditions' => array( 'UltrasoundPage.profile_id' => $leid ) )));
   	    $this->set('welcome',$this->WelcomebbyPage->find('first', array( 'conditions' => array( 'WelcomebbyPage.profile_id' => $leid ) )));
        $this->set('whoami',$this->WhoamiPage->find('first', array( 'conditions' => array( 'WhoamiPage.profile_id' => $leid ) )));


		$profid = $this->Profile->find('first', array( 'conditions' => array( 'Profile.id' => $leid ) ) );
	    $this->set('cover_pic', $profid['Profile']['cover_photo']); 
	    $this->set('perfil', $profid); 

	    $this->set('profileid',$leid);

	}


    /*
    * Funcion para que el usuario cambie el tema 
    *
    */
    public function changeTheme($uid = null, $theme = null){
    	$error = 'No puedes cambiar el tema.';
		if($theme != null){ 		

			//guardar selected theme!
			$this->Profile->create();

			$id = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' =>  $uid ) ) );

		    $this->Profile->id = $id['Profile']['id'];
			
			$this->Profile->set(array( 
		        'theme' => $theme
		      ));

	      if ($this->Profile->save()) {
	        $error= 'Success!';
	      } else {
	         $error= 'Tu tema no se ha podido guardar.';
	      }
		}

        header("Content-type: application/json");
        echo json_encode($error);
        exit;
    }

  public function changeFont($uid = null, $font = null){
    	$error = 'No puedes cambiar el font.';
		if($font != null){ 		

			//guardar selected theme!
			$this->Profile->create();

			$id = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' =>  $uid ) ) );

		    $this->Profile->id = $id['Profile']['id'];
			
			$this->Profile->set(array( 
		        'font' => $font
		      ));

	      if ($this->Profile->save()) {
	        $error= 'Success!';
	        $this->Session->write('User.font', $font);
	      } else {
	         $error= 'Tu tema no se ha podido guardar.';
	      }
		}

        header("Content-type: application/json");
        echo json_encode($error);
        exit;
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

	        $user_saved1 = $this->Profile->find('first', 
	        array( 
	                'conditions' => array('Profile.uid' => $this->Session->read('User.uid'))
	            )
	        );

	        if($user_saved >= 1){ //user saved, so not welcome page, but cover page

		        $this->Session->write('User.id', $user_saved1['Profile']['id']);
		        $this->Session->write('User.uid', $user_saved1['Profile']['uid']);
	        	$this->Session->write("User.theme", $user_saved1['Profile']['theme']);
		        $this->Session->write('User.font', $user_saved1['Profile']['font']);
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


			$exists = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' =>  $uid ) ) );
	  
	    	if( empty($exists['Profile']['id']) && empty($user_profile["id"])==FALSE ){

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
		} else {

			$this->Profile->id = $exists['Profile']['id'];
			$uidi = $user_profile["id"];

			$this->Profile->set(array( 
		        'theme' => $theme
		      ));
		}
      
      
      if ($this->Profile->save()) {
        $id = $this->Profile->id;
        $this->Session->write('User.id', $id);
        $this->Session->write('User.uid', $uidi);

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

		  	$fileName = $this->generateUniqueFilename('CoverPhoto_'.$id['Profile']['uid'].'.png'); 
		  	$error = $this->handleFileUpload($this->request->data['Profile']['file'], $fileName); 

			  if ($error == false) { 
				  //$this->generate_image_thumbnail(WWW_ROOT.'img/cover_photos/'.$fileName,WWW_ROOT.'img/cover_photos/'.$fileName);
					
				  $this->generate_image_thumbnail(WWW_ROOT.'img/cover_photos/'.$fileName,WWW_ROOT.'img/cover_photos/thumbnail_'.$fileName);

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
				$nameIMG = $this->generateUniqueFilename('CoverPhoto_'.$uid.'.png'); 
		        imagepng($avatar, WWW_ROOT.'img/cover_photos/'.$nameIMG); 
				$this->generate_image_thumbnail(WWW_ROOT.'img/cover_photos/'.$nameIMG,WWW_ROOT.'img/cover_photos/thumbnail_'.$nameIMG);

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

    if( isset($id['Profile']['cover_photo']) && $id['Profile']['cover_photo'] != null && !empty($id['Profile']['cover_photo']) ){
	    $this->set('cover_pic', $id['Profile']['cover_photo']); 
    }
    if( $id['Profile']['font'] != null && !empty($id['Profile']['font']) ){
	    $this->Session->write('User.font', $id['Profile']['font']);
    }

	    $this->set('profileid', $id['Profile']['id']); 
	    $this->set('facebookid', $id['Profile']['uid']); 

	}

	public function welcome(){

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
    $THUMBNAIL_IMAGE_MAX_WIDTH = 298;

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



/****************************************************************************************************/
	
	public function midiario($uid = null){

    	$id = $this->Profile->find('first', array( 'conditions' => array( 'Profile.uid' =>  $uid ) ) );
	  
	    $profileid = $id['Profile']['id']; 
        
        $imgname = $this->makeImage($uid);

        if($imgname == 'No images'){
            $returning = 'No se ha podido publicar tu diario.';
            $returnarr = array('mensaje' => $returning);
        } else {

            $pic = 'https://momtomom.mx/apps/memorias_embarazo/img/cover_photos/'.$imgname;
            $returning =  "successfully";

            $returnarr = array('mensaje' => $returning, 'imagen' => $pic, 'nombre' => $imgname, 'usuarioid' => $profileid);    
        }
        header("Content-type: application/json");
        echo json_encode($returnarr);
        exit;
    }
   
    public function postDiary($msg,$url,$pid,$uid){
        /*$facebook = new Facebook(array(
	        'appId' => "163480813810636",
	        'secret' => "3ccf0a83049aa75bd8f0bc9707b9e7a0",
	        'cookie' => true
	    ));*/

	    $facebook = $this->Session->read("facebook");
	    $session = $facebook->getUser();

        $facebook->setFileUploadSupport(true);

        /**
         * Your Message is updated, you need to post this along with the access token
         */

        if(is_null($msg)){
            $returning = 'No se podido publicar tu diario. Por favor, escribe un mensaje.';
            $returnarr = array('mensaje' => $returning);

        } elseif ($session) {

            $args = array('message' => $msg.' <3 Te invito a leer las Memorias de mi embarazo en: http://momtomom.mx/apps/memorias_embarazo/profiles/view_book/'.$uid.'. ¡Tú también puedes crear tu propio diario haciendo click aquí! https://www.facebook.com/pages/Nativo-Desarrollo/514166771955164?sk=app_163480813810636'); 
            $args['url'] = 'https://momtomom.mx/apps/memorias_embarazo/img/cover_photos/'.$url;
            
            $user_profile_img = $facebook->api('/'.$uid.'/photos','POST', $args);

            if (isset($user_profile_img['id'])){
                $returning =  "successfully";
            } else { 
                $returning = "error";
            }

            $returnarr = array('mensaje' => $returning);    
        }
        header("Content-type: application/json");
        echo json_encode($returnarr);
        exit;
    }

	/* 
    * Funcion makeImage()
    * Que crea la imagen para el trimestre
    */
    public function makeImage($uid){

        $id_user = $this->Profile->find("first", 
            array(
            'conditions' => array('Profile.uid' => $uid )//array of conditions
            )
        );
         
        $u_id =  $id_user['Profile']['id'];
        $tema =  $id_user['Profile']['theme'];

        $mapWidth = 810;
        $mapHeight = 1100;

        if(!empty($u_id)){

        	$path = 'https://momtomom.mx/apps/memorias_embarazo/';

        	if($tema == 1){
	            $pattern = imagecreatefrompng(WWW_ROOT.'img/ForTheCover.png');
        	} elseif ($tema == 2) {
 	           $pattern = imagecreatefrompng(WWW_ROOT.'img/tema2/ForTheCover.png');
        	} elseif ($tema == 3) {
           		$pattern = imagecreatefrompng(WWW_ROOT.'img/tema3/ForTheCover.png');
        	} elseif ($tema == 4) {
           		$pattern = imagecreatefrompng(WWW_ROOT.'img/tema4/ForTheCover.png');
        	}

            $mapImage = $this->imagefillfromfile($pattern, $mapWidth, $mapHeight);
            imagedestroy($pattern);

        	// notas: 
        	// 266 - 448
    		// 564 - 660

            $le_cover_photo = $path.'img/cover_photos/thumbnail_'.$id_user['Profile']['cover_photo'];
 

            if( !empty($le_cover_photo) ){				

				$tam = @getimagesize($le_cover_photo);

				if($tam != FALSE){

		            switch ($tam['mime']) {
		                case 'image/png':
					        $tileImg = imagecreatefrompng($le_cover_photo);
					        //echo "png";
					        break;
					    case 'image/jpeg':
					        $tileImg = imagecreatefromjpeg($le_cover_photo);
					        //echo "jpg";
					        break;
					    case 'image/gif':
					        $tileImg = imagecreatefromgif($le_cover_photo);
					        //echo "gif";
					        break;
					}
					    
				   /* print_r($tam);
	            	var_dump($tileImg);
	            	die();*/

		            // See below for definition of imagecreatealpha
		            //255 444  , 553 655 | width : 298 . 211
		            $height = imagesy($tileImg);
    				$imgdest = $this->imagecreatealpha(298, 211);	

		            imagecopy($imgdest, $tileImg, 0, 0, 0, 0, 298, $height);
				               
		            imagecopy($mapImage, $imgdest, 255, 444, 0, 0, 298, 211);

		            imagedestroy($tileImg);
	        	}
        	}
            /*
             * SAVE  IMAGE
             */

            $nameIMG = 'memos_from_'.$u_id.'_prego.png';
            imagepng($mapImage, WWW_ROOT.'img/cover_photos/'.$nameIMG); 
            return $nameIMG;

        } else {
            return 'No images';
        }
    }

	// Creates a new image of the size specified with a blank background (transparent)
	function imagecreatealpha($width, $height) {

	    // Create a normal image and apply required settings
	    $img = imagecreatetruecolor($width, $height);
	    imagealphablending($img, false);
	    imagesavealpha($img, true);
	    
	    // Apply the transparent background
	    $trans = imagecolorallocatealpha($img, 0, 0, 0, 127);
	    for ($x = 0; $x < $width; $x++)
	    {
	        for ($y = 0; $y < $height; $y++)
	        {
	            imagesetpixel($img, $x, $y, $trans);
	        }
	    }
	    
	    return $img;
	}    

    public function imagefillfromfile($image, $width, $height) {
        $imageWidth = imagesx($image);
        $imageHeight = imagesy($image);
        $newImage = imagecreatetruecolor($width, $height);
        
        for ($imageX = 0; $imageX < $width; $imageX += $imageWidth) {
            for ($imageY = 0; $imageY < $height; $imageY += $imageHeight) {
                imagecopy($newImage, $image, $imageX, $imageY, 0, 0, $imageWidth, $imageHeight);
            }
        }
        
        return($newImage);
        imagedestroy($newImage);
    }

}
