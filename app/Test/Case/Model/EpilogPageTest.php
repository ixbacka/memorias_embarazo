<?php
App::uses('EpilogPage', 'Model');

/**
 * EpilogPage Test Case
 *
 */
class EpilogPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.epilog_page',
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
		$this->EpilogPage = ClassRegistry::init('EpilogPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EpilogPage);

		parent::tearDown();
	}

}
