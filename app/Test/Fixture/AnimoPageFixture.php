<?php
/**
 * AnimoPageFixture
 *
 */
class AnimoPageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'month1_humor' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'month2_humor' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'month3_humor' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'month1_energy' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'month2_energy' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'month3_energy' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'month1_physical' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'month2_physical' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'month3_physical' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'month1_other' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'month2_other' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'month3_other' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'month1_humor' => 1,
			'month2_humor' => 1,
			'month3_humor' => 1,
			'month1_energy' => 1,
			'month2_energy' => 1,
			'month3_energy' => 1,
			'month1_physical' => 1,
			'month2_physical' => 1,
			'month3_physical' => 1,
			'month1_other' => 'Lorem ipsum dolor sit amet',
			'month2_other' => 'Lorem ipsum dolor sit amet',
			'month3_other' => 'Lorem ipsum dolor sit amet'
		),
	);

}
