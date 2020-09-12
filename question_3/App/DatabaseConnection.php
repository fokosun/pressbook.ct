<?php

namespace Nasa;

use PDO;

class DatabaseConnection
{
	/** @var PDO  */
	protected $conn;

	/**
	 * Set up database connection with PDO
	 *
	 * DatabaseConnection constructor.
	 */
	public function __construct()
	{
		//TODO: fetch creds with dotenv
		$servername = "localhost";
		$username = "root";
		$password = "Str()nger1";

		try {
			$this->conn = new PDO("mysql:host=$servername;dbname=nasa", $username, $password);

			// set the PDO error mode to exception
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(\PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
			//throw this into the global header something along those lines
		}
	}

	/**
	 * @return PDO
	 */
	public function getConnection(): PDO
	{
		return $this->conn;
	}

	/**
	 * Close the connection
	 */
	public function close_connection ()
	{
		$this->conn = null;
	}
}