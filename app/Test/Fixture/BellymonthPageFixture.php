<?php
/**
 * BellymonthPageFixture
 *
 */
class BellymonthPageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'profile_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'actual_weight' => array('type' => 'integer', 'null' => true, 'default' => null),
		'measurements' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'apetite' => array('type' => 'integer', 'null' => true, 'default' => null),
		'b4' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 70, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sleep' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'actual_weight' => 1,
			'measurements' => 'Lorem ipsum dolor sit amet',
			'apetite' => 1,
			'b4' => 'Lorem ipsum dolor sit amet',
			'sleep' => 1
		),
	);

}
