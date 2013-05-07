<?php
App::uses('CongratsPage', 'Model');

/**
 * CongratsPage Test Case
 *
 */
class CongratsPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.congrats_page'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CongratsPage = ClassRegistry::init('CongratsPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CongratsPage);

		parent::tearDown();
	}

}
