<?php

namespace Astronaut;

class Astronaut {

	/**
	 * Name of an Astronaut
	 * @var
	 */
	protected $name;

	/**
	 * Weight of an Astronaut
	 * @var
	 */
	protected $weight;

	/**
	 * Create a new Astronaut
	 *
	 * @param string $name
	 * @param float $weight
	 *
	 * @return array
	 */
	public function make_astronaut(string $name, float $weight): array
	{
		$this->name = strval($name);
		$this->weight = number_format(floatval($weight), 2);

		return [
			'name' => $this->get_name(),
			'weight' => $this->get_weight()
		];
	}

	/**
	 * Set Astronaut weight
	 *
	 * @param float $pounds
	 * @return void
	 */
	public function add_weight_to_astronaut(float $pounds)
	{
		$this->weight += number_format(floatval($pounds), 2);
	}

	/**
	 * Launch Astronaut
	 *
	 * @return string
	 */
	public function launch_astronaut(): string
	{
		$launch_info = $this->get_name();
		$weight = (int) $this->get_weight();

		if ($weight <= 200) {
			$launch_info .= ", going where no human has gone before.\n";
		}

		if ($weight > 200) {
			$launch_info .= " too heavy, grounded.\n";
		}

		return $launch_info;
	}

	/**
	 * Astronaut name getter method
	 * @return mixed
	 */
	public function get_name(): string
	{
		return $this->name;
	}

	/**
	 * Astronaut weight getter method
	 * @return mixed
	 */
	public function get_weight(): float
	{
		return $this->weight;
	}
}