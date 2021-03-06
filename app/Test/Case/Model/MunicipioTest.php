<?php
App::uses('Municipio', 'Model');

/**
 * Municipio Test Case
 */
class MunicipioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.municipio',
		'app.patient',
		'app.etnia',
		'app.person',
		'app.ocupacion',
		'app.doctor',
		'app.hospitales',
		'app.cargo',
		'app.specialties',
		'app.inform',
		'app.medicamentos',
		'app.country',
		'app.parroquia',
		'app.type_blood',
		'app.history',
		'app.question',
		'app.ultrasound',
		'app.type_ultrasound'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Municipio = ClassRegistry::init('Municipio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Municipio);

		parent::tearDown();
	}

}
