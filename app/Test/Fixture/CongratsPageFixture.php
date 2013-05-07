<?php
/**
 * CongratsPageFixture
 *
 */
class CongratsPageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'sospeche' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'prueba' => array('type' => 'date', 'null' => true, 'default' => null),
		'firstfeeling' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'babycoming' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'howishare' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'babynum' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'babybros' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'details' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 400, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'sospeche' => 'Lorem ipsum dolor sit amet',
			'prueba' => '2013-04-30',
			'firstfeeling' => 'Lorem ipsum dolor sit amet',
			'babycoming' => 1,
			'howishare' => 'Lorem ipsum dolor sit amet',
			'babynum' => 1,
			'babybros' => 'Lorem ipsum dolor sit amet',
			'details' => 'Lorem ipsum dolor sit amet'
		),
	);

}
