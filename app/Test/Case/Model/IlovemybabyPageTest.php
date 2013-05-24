<?php
App::uses('IlovemybabyPage', 'Model');

/**
 * IlovemybabyPage Test Case
 *
 */
class IlovemybabyPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ilovemybaby_page',
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
		$this->IlovemybabyPage = ClassRegistry::init('IlovemybabyPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IlovemybabyPage);

		parent::tearDown();
	}

}
