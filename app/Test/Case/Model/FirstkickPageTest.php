<?php
App::uses('FirstkickPage', 'Model');

/**
 * FirstkickPage Test Case
 *
 */
class FirstkickPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.firstkick_page',
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
		$this->FirstkickPage = ClassRegistry::init('FirstkickPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FirstkickPage);

		parent::tearDown();
	}

}
