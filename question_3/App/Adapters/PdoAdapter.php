<?php

namespace Nasa;

use Nasa\Interfaces\dbConnector;

class PdoAdapter implements dbConnector
{
	/** @var \PDO  */
	protected $connection;

	/**
	 * PdoAdapter constructor.
	 */
	public function __construct()
	{
		$dsn = config()['connections']['driver'];
		$servername = config()['connections']['host'];
		$username = config()['connections']['user'];
		$password = config()['connections']['password'];
		$database = config()['connections']['database'];

		try {
			$this->connection = new \PDO("$dsn:host=$servername;dbname=$database", $username, $password);
			$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch(\PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
			die();
		}
	}

	/**
	 * @return \PDO
	 */
	public function getConnection(): \PDO
	{
		return $this->connection;
	}

	/**
	 * Close the connection
	 */
	public function closeConnection()
	{
		$this->connection = null;
	}
}
