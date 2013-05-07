<?php
App::uses('AnimoPage', 'Model');

/**
 * AnimoPage Test Case
 *
 */
class AnimoPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.animo_page'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AnimoPage = ClassRegistry::init('AnimoPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AnimoPage);

		parent::tearDown();
	}

}
