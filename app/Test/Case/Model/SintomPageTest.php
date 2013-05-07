<?php
App::uses('SintomPage', 'Model');

/**
 * SintomPage Test Case
 *
 */
class SintomPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sintom_page'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SintomPage = ClassRegistry::init('SintomPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SintomPage);

		parent::tearDown();
	}

}
