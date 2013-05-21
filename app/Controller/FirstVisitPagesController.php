<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'facebook');

/**
 * FirstVisitPages Controller
 *
 */
class FirstVisitPagesController extends AppController {

var $uses = array('FirstVisitPage','Profile');

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

        $idf = $this->FirstVisitPage->find('first', array( 'conditions' => array( 'FirstVisitPage.profile_id' =>  $leid ) ) );
        
        if( !empty($idf['FirstVisitPage']['id']) && !is_null($idf['FirstVisitPage']['id'])){
          $this->FirstVisitPage->id = $idf['FirstVisitPage']['id'];
        }

        if ($this->FirstVisitPage->save($this->request->data)) {
          //$this->Session->setFlash(__('The Cover photo has been saved'));
        } else {
          $this->Session->setFlash(__('The Page could not be saved. Please, try again.'));
        }


      }

      $this->set('firstvisit',$this->FirstVisitPage->find('first', array( 'conditions' => array( 'FirstVisitPage.profile_id' => $leid ) )));
		  $this->set('profileid',$leid);
	}

}
