<?php

namespace Nasa;

use Nasa\Adapters\PdoAdapter;

class BaseModel {

	protected DatabaseConnection $connection;
	public array $attributes;
	protected string $table;
	protected NasaRequest $request;

	/**
	 * BaseModel constructor.
	 * @param array $params
	 * @throws Exceptions\AstronautException
	 */
	public function __construct($params = [])
	{
		$this->connection = new DatabaseConnection(new PdoAdapter());
		$this->attributes = $params;
		$this->request = new NasaRequest($params);
	}

	/**
	 * Build the PDO statement
	 * Save to the DB
	 *
	 * @return bool
	 */
	public function save()
	{
		$statement = $this->connection
			->getConnection()
			->prepare("INSERT INTO " . $this->table .  "(astronaut_name, weight) VALUES (:astronaut_name, :weight)");

		return $statement->execute([
			'astronaut_name' => $this->request->get('name'),
			'weight' => $this->request->get('weight'),
		]);
	}
}
