<?php
App::uses('Alocation', 'Model');

/**
 * Alocation Test Case
 *
 */
class AlocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alocation',
		'app.group',
		'app.user',
		'app.ocupation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Alocation = ClassRegistry::init('Alocation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alocation);

		parent::tearDown();
	}

}
