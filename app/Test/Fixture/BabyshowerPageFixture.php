<?php
/**
 * BabyshowerPageFixture
 *
 */
class BabyshowerPageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'profile_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'bbyshower_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'present1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'present2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'present3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'favoritepresent' => array('type' => 'integer', 'null' => true, 'default' => null),
		'guest1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 140, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'guest2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 140, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'guest3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 140, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'photo1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 400, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'photo2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 400, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'bbyshower_date' => '2013-05-24',
			'present1' => 'Lorem ipsum dolor sit amet',
			'present2' => 'Lorem ipsum dolor sit amet',
			'present3' => 'Lorem ipsum dolor sit amet',
			'favoritepresent' => 1,
			'guest1' => 'Lorem ipsum dolor sit amet',
			'guest2' => 'Lorem ipsum dolor sit amet',
			'guest3' => 'Lorem ipsum dolor sit amet',
			'photo1' => 'Lorem ipsum dolor sit amet',
			'photo2' => 'Lorem ipsum dolor sit amet'
		),
	);

}
