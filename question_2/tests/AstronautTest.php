<?php

namespace Astronaut\Test;

use Astronaut\Astronaut;
use PHPUnit\Framework\TestCase;

class AstronautTest extends TestCase
{
	/**
	 * @test
	 */
	public function an_astronaut_has_a_name()
	{
		$astronaut = new Astronaut();
		$astronaut = $astronaut->make_astronaut('John Glenn', 5.673);
		$this->assertEquals('John Glenn', $astronaut["name"]);
	}

	/**
	 * @test
	 */
	public function an_astronaut_name_must_be_of_type_string()
	{
		$this->expectException(\TypeError::class);
		$astronaut = new Astronaut();
		$astronaut->make_astronaut([], 5.673);
	}

	/**
	 * @test
	 */
	public function an_astronaut_weight_is_formatted_to_2_decimal_places()
	{
		$astronaut = new Astronaut();
		$astronaut = $astronaut->make_astronaut('John Glenn', 5.673);
		$this->assertEquals(5.67, $astronaut["weight"]);
	}

	/**
	 * @test
	 */
	public function an_astronaut_weight_can_increase_by_the_amount_of_pounds_added()
	{
		$astronaut = new Astronaut();
		$init = $astronaut->make_astronaut('John Glenn', 5.673);
		$astronaut->add_weight_to_astronaut(0.001);

		$this->assertEquals(5.67, $astronaut->get_weight());
	}

	/**
	 * @test
	 */
	public function an_astronaut_is_too_heavy_when_their_weight_is_greater_than_200()
	{
		$astronaut = new Astronaut();
		$astronaut->make_astronaut('John Glenn', 162.673);
		$astronaut->add_weight_to_astronaut(38.40925);
		$launch_info = $astronaut->launch_astronaut();

		$this->assertSame("John Glenn too heavy, grounded.\n", $launch_info);
	}

	/**
	 * @test
	 */
	public function an_astronaut_is_not_heavy_when_their_weight_is_less_than_or_equal_to_200()
	{
		$astronaut = new Astronaut();
		$astronaut->make_astronaut('John Glenn', 5.673);
		$astronaut->add_weight_to_astronaut(4.40925);
		$launch_info = $astronaut->launch_astronaut();

		$this->assertSame("John Glenn, going where no human has gone before.\n", $launch_info);
	}
}
