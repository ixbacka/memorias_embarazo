<?php
App::uses('SpecialdeliveryPage', 'Model');

/**
 * SpecialdeliveryPage Test Case
 *
 */
class SpecialdeliveryPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.specialdelivery_page',
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
		$this->SpecialdeliveryPage = ClassRegistry::init('SpecialdeliveryPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SpecialdeliveryPage);

		parent::tearDown();
	}

}
