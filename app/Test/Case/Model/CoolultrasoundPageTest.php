<?php
App::uses('CoolultrasoundPage', 'Model');

/**
 * CoolultrasoundPage Test Case
 *
 */
class CoolultrasoundPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.coolultrasound_page',
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
		$this->CoolultrasoundPage = ClassRegistry::init('CoolultrasoundPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CoolultrasoundPage);

		parent::tearDown();
	}

}
