<?php
/**
 * UltrasoundPageFixture
 *
 */
class UltrasoundPageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'first_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'first_week' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'first_photo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'first_notes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 400, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'second_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'second_week' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'second_photo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'second_notes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 400, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'first_date' => '2013-04-30',
			'first_week' => 1,
			'first_photo' => 'Lorem ipsum dolor sit amet',
			'first_notes' => 'Lorem ipsum dolor sit amet',
			'second_date' => '2013-04-30',
			'second_week' => 1,
			'second_photo' => 'Lorem ipsum dolor sit amet',
			'second_notes' => 'Lorem ipsum dolor sit amet'
		),
	);

}
