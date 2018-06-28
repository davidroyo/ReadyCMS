<?php

include_once '../../models/dbconn.php';

class migrate extends db{
	public function createTables() {
		$sql = "

		CREATE TABLE users (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstname VARCHAR(30) NOT NULL,
			lastname VARCHAR(30) NOT NULL,
			email VARCHAR(50),
			reg_date TIMESTAMP,
			validated BOOLEAN NOT NULL DEFAULT 0
		);

		";

		//CREATING CONNECTION AND EXECUTING QUERY
		$db = new db();
		
		if(!$db->conn()->query($sql)) {
			echo 'could not create table users';
		}else {
			echo 'Created table users';
		}

	}
}


//UNCOMMENT THIS IN ORDER TO EXECUTE THE MIGRATION
//$migrate = new migrate();
//$migrate->createTables();

?>