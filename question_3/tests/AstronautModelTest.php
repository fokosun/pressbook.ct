<?php

use Nasa\Astronaut;
use Nasa\BaseModel;
use Nasa\Exceptions\AstronautException;
use PHPUnit\Framework\TestCase;

class AstronautModelTest extends TestCase
{
	/**
	 * @test
	 */
	public function it_is_a_base_model_instance()
	{
		$new_astronaut = new Astronaut([
			'name' => 'John Glenn',
			'weight' => 167
		]);
		$this->assertInstanceOf(BaseModel::class, $new_astronaut);
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

	/**
	 * @test
	 */
	public function it_throws_an_exception_if_the_request_params_is_not_given()
	{
		$this->expectException(AstronautException::class);

		$new_astronaut = new Astronaut([]);
		$this->assertTrue($new_astronaut->save());
	}
}
