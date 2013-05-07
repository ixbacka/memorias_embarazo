<?php
App::uses('UltrasoundPage', 'Model');

/**
 * UltrasoundPage Test Case
 *
 */
class UltrasoundPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ultrasound_page'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UltrasoundPage = ClassRegistry::init('UltrasoundPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UltrasoundPage);

		parent::tearDown();
	}

}
