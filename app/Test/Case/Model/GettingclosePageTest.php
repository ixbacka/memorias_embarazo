<?php
App::uses('GettingclosePage', 'Model');

/**
 * GettingclosePage Test Case
 *
 */
class GettingclosePageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gettingclose_page',
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
		$this->GettingclosePage = ClassRegistry::init('GettingclosePage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GettingclosePage);

		parent::tearDown();
	}

}
