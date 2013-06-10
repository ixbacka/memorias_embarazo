<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'facebook');

/**
 * CongratsPages Controller
 *
 */
class CongratsPagesController extends AppController {

  var $uses = array('CongratsPage','Profile');
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

        $idf = $this->CongratsPage->find('first', array( 'conditions' => array( 'CongratsPage.profile_id' =>  $leid ) ) );
        
        if( !empty($idf['CongratsPage']['id']) && !is_null($idf['CongratsPage']['id'])){
          $this->CongratsPage->id = $idf['CongratsPage']['id'];
        }

        // $this->CongratsPage->set(array( 
        //     'sospeche' => $this->request->data['CongratsPage']['sospeche'],
        //     'prueba' => $this->request->data['CongratsPage']['prueba'],
        //     'firstfeeling' => $this->request->data['CongratsPage']['firstfeeling'],
        //     'babycoming' => $this->request->data['CongratsPage']['babycoming'],
        //     'howishare' => $this->request->data['CongratsPage']['howishare'],
        //     'babynum' => $this->request->data['CongratsPage']['babynum'],
        //     'babybros' => $this->request->data['CongratsPage']['babybros'],
        //     'details' => $this->request->data['CongratsPage']['details']
        //   ));

        if ($this->CongratsPage->save($this->request->data)) {
          //$this->Session->setFlash(__('The Cover photo has been saved'));
        } else {
          $this->Session->setFlash(__('The Page could not be saved. Please, try again.'));
        }


      }

      $this->set('congrats',$this->CongratsPage->find('first', array( 'conditions' => array( 'CongratsPage.profile_id' => $leid ) )));
      $this->set('profileid',$leid);
  }





  public function view($id = null){
      $leid = $id;
      
      $this->set('congrats',$this->CongratsPage->find('first', array( 'conditions' => array( 'CongratsPage.profile_id' => $leid ) )));
      $this->set('profileid',$leid);
  }


}
