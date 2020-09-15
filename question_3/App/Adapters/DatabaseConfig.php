<?php

namespace Nasa;

class DatabaseConfig
{
	public string $dsn;
	public string $servername;
	public string $username;
	public string $password;
	public string $database;

	/**
	 * DatabaseConfig constructor.
	 */
	public function __construct()
	{
		$this->dsn = config()['connections']['driver'];
		$this->servername = config()['connections']['host'];
		$this->username = config()['connections']['user'];
		$this->password = config()['connections']['password'];
		$this->database = config()['connections']['database'];
	}
}