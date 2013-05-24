<?php
/**
 * ChildsexPageFixture
 *
 */
class ChildsexPageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'profile_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'theythink' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ithink' => array('type' => 'integer', 'null' => true, 'default' => null),
		'decided' => array('type' => 'integer', 'null' => true, 'default' => null),
		'whyidecided' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nickname' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'theythink' => 1,
			'ithink' => 1,
			'decided' => 1,
			'whyidecided' => 'Lorem ipsum dolor sit amet',
			'nickname' => 'Lorem ipsum dolor sit amet'
		),
	);

}
