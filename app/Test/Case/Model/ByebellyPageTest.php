<?php
App::uses('ByebellyPage', 'Model');

/**
 * ByebellyPage Test Case
 *
 */
class ByebellyPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.byebelly_page',
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
		$this->ByebellyPage = ClassRegistry::init('ByebellyPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ByebellyPage);

		parent::tearDown();
	}

}
