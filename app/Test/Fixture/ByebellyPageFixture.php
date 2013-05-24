<?php
/**
 * ByebellyPageFixture
 *
 */
class ByebellyPageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'profile_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'byebelly_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'itstarted' => array('type' => 'integer', 'null' => true, 'default' => null),
		'days' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hours' => array('type' => 'integer', 'null' => true, 'default' => null),
		'iwas' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'experience' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'profile_id' => 1,
			'byebelly_date' => '2013-05-24',
			'itstarted' => 1,
			'days' => 1,
			'hours' => 1,
			'iwas' => 'Lorem ipsum dolor sit amet',
			'experience' => 'Lorem ipsum dolor sit amet'
		),
	);

}
