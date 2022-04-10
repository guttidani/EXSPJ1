<?php

$servername = "localhost";
$username = "exspj1";
$password = "betu123";
$dbname = "exspj1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


class db_data
{
	protected $db_name;
	protected $conn;

	function set_dbname($name)
	{
		$this->name = $name;
	}
	function get_dbname()
	{
		return $this->name;
	}

	function set_conn($conn)
	{
		$this->conn = $conn;
	}
	function get_conn()
	{
		return $this->conn;
	}
}

class db_connect
{
	protected $conn;
	protected $dbname;
	protected $dbdata;
	function __construct($dbname, $dbdata)
	{
		$servername = "localhost";
		$username = "exspj1";
		$password = "betu123";
		$conn = new mysqli($servername, $username, $password);
		$this->conn = $conn;

		$sql = "create database if not exists $dbname";
		$conn->query($sql);

		$sql = "USE exspj1";
		$conn->query($sql);
		$this->conn = $conn;
		$this->dbname = $dbname;
		$this->dbdata = $dbdata;
		//
		$dbdata->set_conn($this->conn);
		$dbdata->set_dbname($this->dbname);
	}
	function get_conn()
	{
		return $this->conn;
	}
	function get_dbname()
	{
		return $this->dbname;
	}
	function get_dbdata()
	{
		return $this->dbdata;
	}
}

class table
{
	protected $tname;
	protected $tdata;
	function __construct($c, $tname, $tdata)
	{
		$sql = "CREATE TABLE IF NOT EXISTS $tname (";
		foreach ($tdata as $t) {
			foreach ($t as $x) {
				$sql .= $x . " ";
			}
			$sql .= ", ";
		}
		$sql = substr($sql, 0, strlen($sql) - 2);
		$sql .= ")";
		$c->query($sql);
	}

	// lekérdezés
	// ALTER
	// insert
	// update
	
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Munkaerő nyilvántartás</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
<?php
include "header.php";
include "body.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>