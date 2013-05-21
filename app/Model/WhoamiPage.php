<?php
App::uses('AppModel', 'Model');
/**
 * WhoamiPage Model
 *
 */
class WhoamiPage extends AppModel {
	public $belongsTo = 'Profile';

}
