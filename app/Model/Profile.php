<?php
App::uses('AppModel', 'Model');
/**
 * Profile Model
 *
 */
class Profile extends AppModel {

	public $hasOne = 'FamilytreePage';
}
