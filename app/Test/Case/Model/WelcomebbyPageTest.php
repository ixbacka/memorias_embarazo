<?php
App::uses('WelcomebbyPage', 'Model');

/**
 * WelcomebbyPage Test Case
 *
 */
class WelcomebbyPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.welcomebby_page',
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
		$this->WelcomebbyPage = ClassRegistry::init('WelcomebbyPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WelcomebbyPage);

		parent::tearDown();
	}

}
