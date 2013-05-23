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

}
