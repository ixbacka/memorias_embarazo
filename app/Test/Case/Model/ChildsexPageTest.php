<?php
App::uses('ChildsexPage', 'Model');

/**
 * ChildsexPage Test Case
 *
 */
class ChildsexPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.childsex_page',
		'app.profile',
		'app.familytree_page'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ChildsexPage = ClassRegistry::init('ChildsexPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ChildsexPage);

		parent::tearDown();
	}

}
