<?php
App::uses('Ocupation', 'Model');

/**
 * Ocupation Test Case
 *
 */
class OcupationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ocupation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ocupation = ClassRegistry::init('Ocupation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ocupation);

		parent::tearDown();
	}

}
