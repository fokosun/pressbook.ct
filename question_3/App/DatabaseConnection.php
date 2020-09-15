<?php

namespace Nasa;

use Nasa\Interfaces\dbConnector;

class DatabaseConnection
{
	protected dbConnector $adapter;

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
		return $this->getAdapter()->getConnection();
	}

	/**
	 * Get the Adapter instance
	 *
	 * @return mixed
	 */
	public function getAdapter()
	{
		return $this->adapter;
	}
}