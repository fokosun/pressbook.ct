<?php

use Nasa\Astronaut;
use PHPUnit\Framework\TestCase;

class AstronautModelTest extends TestCase
{
	/**
	 * @test
	 */
	public function it_is_a_base_model_instance()
	{
		$new_astronaut = new Astronaut();
		$this->assertInstanceOf(\Nasa\BaseModel::class, $new_astronaut);
	}

	/**
	 * @tes
	 */
	public function validation_fails_if_the_astronaut_name_is_not_given()
	{
		$new_astronaut = new Astronaut([
			'weight' => 167
		]);
		//assert the errors
	}

	/**
	 * @tes
	 */
	public function validation_fails_if_the_astronaut_weight_is_not_given()
	{
		$new_astronaut = new Astronaut([
			'name' => 'test name'
		]);
		//assert the errors
	}

	/**
	 * @tes
	 */
	public function validation_fails_if_the_astronaut_weight_is_not_an_integer()
	{
		$new_astronaut = new Astronaut([
			'name' => 'test name',
			'weight' => 'not an integer'
		]);
		//assert the errors
	}

	/**
	 * @tes
	 */
	public function validation_fails_if_the_request_is_emoty()
	{
		$new_astronaut = new Astronaut();
		//assert the errors
	}

	/**
	 * @test
	 */
	public function it_has_name_attribute()
	{
		$new_astronaut = new Astronaut([
			'name' => 'John Glenn'
		]);

		$this->assertArrayHasKey('name', $new_astronaut->attributes);
	}

	/**
	 * @test
	 */
	public function it_has_weight_attribute()
	{
		$new_astronaut = new Astronaut([
			'weight' => 162
		]);

		$this->assertArrayHasKey('weight', $new_astronaut->attributes);
	}

	/**
	 * @test
	 */
	public function it_returns_true_when_an_astronaut_is_successfully_created()
	{
		$new_astronaut = new Astronaut([
			'name' => 'John Glenn',
			'weight' => 167
		]);

		$this->assertTrue($new_astronaut->save());
	}
}
