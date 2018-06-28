<?php

include_once './dbconn.php';

class migrate extends db{
	public function createTables() {
		$sql = "

		CREATE TABLE users (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstname VARCHAR(30) NOT NULL,
			lastname VARCHAR(30) NOT NULL,
			email VARCHAR(50) NOT NULL,
			password nvarchar(128) NOT NULL,
			reg_date TIMESTAMP,
			validated BOOLEAN NOT NULL DEFAULT 0
		);

		";

		//CREATING CONNECTION AND EXECUTING QUERY
		$db = new db();
		
		if(!$db->conn()->query($sql)) {
			echo 'Could not create table users, may already exist';
		}else {
			echo 'Created table users';
		}

	}
}


//UNCOMMENT THIS IN ORDER TO EXECUTE THE MIGRATION
//$migrate = new migrate();
//$migrate->createTables();

?>