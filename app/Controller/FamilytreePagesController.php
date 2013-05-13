<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'facebook');

/**
 * FamilytreePages Controller
 *
 */
class FamilytreePagesController extends AppController {
	var $uses = array('FamilytreePage','Profile');
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
      	//save new fields
      	 if ($this->FamilytreePage->save($this->request->data)) {
                $this->Session->setFlash('Your page has been saved.');
                //$this->redirect(array('action' => 'index'));
            }
      }

      $this->set('familytree',$this->FamilytreePage->find('first', array( 'conditions' => array( 'FamilytreePage.profile_id' => $leid ) )));
		  $this->set('profileid',$leid);


	}

}
