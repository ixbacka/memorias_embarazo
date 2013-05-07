<?php
App::uses('FamilytreePage', 'Model');

/**
 * FamilytreePage Test Case
 *
 */
class FamilytreePageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.familytree_page'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FamilytreePage = ClassRegistry::init('FamilytreePage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilytreePage);

		parent::tearDown();
	}

}
