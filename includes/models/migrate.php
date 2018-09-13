<?php

include_once 'dbconn.php';

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}


class migrate extends db{
	public function createTables() {
		$sql1 = "

		CREATE TABLE users (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstname VARCHAR(30) NOT NULL,
			lastname VARCHAR(30) NOT NULL,
			email VARCHAR(50) NOT NULL,
			password VARCHAR(128) NOT NULL,
			reg_date TIMESTAMP,
			validated BOOLEAN NOT NULL DEFAULT 0
		);
		";

		$sql2 = "

		CREATE TABLE dbinfo (
			id INT(1) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			servername VARCHAR(255) NOT NULL,
			username VARCHAR(255) NOT NULL,
			passwd VARCHAR(255) NOT NULL,
			dbname VARCHAR(255) NOT NULL
		);
		";

		//CREATING CONNECTION AND EXECUTING QUERY
		$db = new db();

		$sentence = $db->conn($_SESSION['servername'],$_SESSION['username'],$_SESSION['password'],$_SESSION['database']);
		
		if (!$sentence->query($sql1)) {
			echo('Error: '.$sentence->error.'<br>');
		}else {
			echo 'Created table users<br>';
		}


		if (!$sentence->query($sql2)) {
			echo('Error: '.$sentence->error.'<br>');
		}else {
			echo 'Created table \'Database\'<br>';
		}

	}
}


//UNCOMMENT THIS IN ORDER TO EXECUTE THE MIGRATION
//$migrate = new migrate();
//$migrate->createTables();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Creating necessary stuff</title>
</head>
<body>

</body>
</html>