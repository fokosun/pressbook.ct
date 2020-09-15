<?php

namespace Nasa\Adapters;

use Nasa\Interfaces\dbConnector;

class PdoAdapter implements dbConnector
{
	protected \PDO $connection;

	/**
	 * PdoAdapter constructor.
	 */
	public function __construct()
	{
		$dsn = $default = config()['default'];

		$servername = config()['connections'][$default]['host'];
		$username = config()['connections'][$default]['user'];
		$password = config()['connections'][$default]['password'];
		$database = config()['connections'][$default]['database'];

		try {
			$this->connection = new \PDO("$dsn:host=$servername;dbname=$database", $username, $password);
			$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch(\PDOException $e) {
			throw new \Exception("Connection failed: ", $e->getMessage());
		}
	}

	/**
	 * @return \PDO
	 */
	public function getConnection(): \PDO
	{
		return $this->connection;
	}
}
