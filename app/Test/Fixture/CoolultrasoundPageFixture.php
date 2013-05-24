<?php
/**
 * CoolultrasoundPageFixture
 *
 */
class CoolultrasoundPageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'profile_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'ultrasound_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'iwas' => array('type' => 'integer', 'null' => true, 'default' => null),
		'doctorsaid' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 400, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'photo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 400, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'urdad' => array('type' => 'integer', 'null' => true, 'default' => null),
		'urdadsays' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'imiss' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'theythink' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'ultrasound_date' => '2013-05-24',
			'iwas' => 1,
			'doctorsaid' => 'Lorem ipsum dolor sit amet',
			'photo' => 'Lorem ipsum dolor sit amet',
			'urdad' => 1,
			'urdadsays' => 'Lorem ipsum dolor sit amet',
			'imiss' => 'Lorem ipsum dolor sit amet',
			'theythink' => 1
		),
	);

}
