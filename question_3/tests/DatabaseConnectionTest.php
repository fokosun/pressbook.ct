<?php

use Nasa\Adapters\PdoAdapter;
use PHPUnit\Framework\TestCase;

class DatabaseConnectionTest extends TestCase
{
	/**
	 * @test
	 */
	public function the_adapter_implements_dbconnector_contract()
	{
		$db_connection = new \Nasa\DatabaseConnection(new PdoAdapter());
		$this->assertTrue($db_connection->getAdapter() instanceof Nasa\Interfaces\dbConnector);
	}

	/**
	 * @test
	 */
	public function the_connection_is_a_pdo_instance()
	{
		$db_connection = new \Nasa\DatabaseConnection(new PdoAdapter());
		$this->assertTrue($db_connection->getConnection() instanceof \PDO);
	}
}
