<?php
App::uses('BabyshowerPage', 'Model');

/**
 * BabyshowerPage Test Case
 *
 */
class BabyshowerPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.babyshower_page',
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
		$this->BabyshowerPage = ClassRegistry::init('BabyshowerPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BabyshowerPage);

		parent::tearDown();
	}

}
