<?php
App::uses('NewfamilyPage', 'Model');

/**
 * NewfamilyPage Test Case
 *
 */
class NewfamilyPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.newfamily_page',
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
		$this->NewfamilyPage = ClassRegistry::init('NewfamilyPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NewfamilyPage);

		parent::tearDown();
	}

}
