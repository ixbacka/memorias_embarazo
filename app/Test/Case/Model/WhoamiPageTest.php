<?php
App::uses('WhoamiPage', 'Model');

/**
 * WhoamiPage Test Case
 *
 */
class WhoamiPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.whoami_page'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WhoamiPage = ClassRegistry::init('WhoamiPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WhoamiPage);

		parent::tearDown();
	}

}
