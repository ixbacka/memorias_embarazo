<?php
App::uses('MomentPage', 'Model');

/**
 * MomentPage Test Case
 *
 */
class MomentPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.moment_page'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MomentPage = ClassRegistry::init('MomentPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MomentPage);

		parent::tearDown();
	}

}
