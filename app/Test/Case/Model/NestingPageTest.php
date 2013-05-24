<?php
App::uses('NestingPage', 'Model');

/**
 * NestingPage Test Case
 *
 */
class NestingPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nesting_page',
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
		$this->NestingPage = ClassRegistry::init('NestingPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NestingPage);

		parent::tearDown();
	}

}
