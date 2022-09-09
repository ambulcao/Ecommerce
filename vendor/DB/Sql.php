<?php 

namespace DB;

/*$infoconn = array(
	'database_host' => 'localhost',
	'database_name' => 'db_ecommerce',
	'database_user' => 'root',
	'database_pass' => 'root',
);

$conn = new mysqli($infoconn['database_host'], $infoconn['database_user'], $infoconn['database_pass'], $infoconn['database_name']);*/

class Sql {

	
	const HOSTNAME = "127.0.0.1";
	const USERNAME = "root";
	const PASSWORD = "root";
	const DBNAME = "db_ecommerce";

	

	private $conn;

	public function __construct()
	{

		$this->conn = new \PDO(
			"mysql:dbname=".Sql::DBNAME.";host=".Sql::HOSTNAME, 
			Sql::USERNAME,
			Sql::PASSWORD
		);

	}

	private function setParams($statement, $parameters = array())
	{

		foreach ($parameters as $key => $value) {
			
			$this->bindParam($statement, $key, $value);

		}

	}

	private function bindParam($statement, $key, $value)
	{

		$statement->bindParam($key, $value);

	}

	public function query($rawQuery, $params = array())
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);

	}

}

 ?>