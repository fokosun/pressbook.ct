<?php

namespace Nasa;

use PDO;
use Nasa\Interfaces\dbConnector;

class DatabaseConnection
{
	/** @var PDO  */
	protected $adapter;

	/**
	 * Set up database connection with PDO
	 *
	 * DatabaseConnection constructor.
	 * @param dbConnector $adapter
	 */
	public function __construct(dbConnector $adapter)
	{
		$this->adapter = $adapter;
	}

	/**
	 * Get the database Connection
	 *
	 * @return mixed
	 */
	public function getConnection()
	{
		return $this->adapter->getConnection();
	}

	/**
	 * Close the connection
	 */
	public function close_connection ()
	{
		$this->adapter->closeConnection();
	}
}