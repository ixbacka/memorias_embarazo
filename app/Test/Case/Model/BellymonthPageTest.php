<?php
App::uses('BellymonthPage', 'Model');

/**
 * BellymonthPage Test Case
 *
 */
class BellymonthPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bellymonth_page',
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
		$this->BellymonthPage = ClassRegistry::init('BellymonthPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BellymonthPage);

		parent::tearDown();
	}

}
