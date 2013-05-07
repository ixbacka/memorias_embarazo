<?php
App::uses('BellyPage', 'Model');

/**
 * BellyPage Test Case
 *
 */
class BellyPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.belly_page'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BellyPage = ClassRegistry::init('BellyPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BellyPage);

		parent::tearDown();
	}

}
