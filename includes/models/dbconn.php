<?php

class db {

	private $servername;
	private $username;
	private $password;
	private $database;


	public function conn($servername, $username, $password, $database) {

		$this->servername = $servername;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;

		//CREATING CONNECTION TO SERVER IN ORDER TO CREATE DATABASE FIRST
		$conn = new mysqli($this->servername, $this->username, $this->password);


		//CREATING DATABASE IN CASE IT DOESNT EXIST
		$sql = "
		CREATE DATABASE " . $this->database . ";
		";

		if(!$conn) {
			echo 'Could not connect to sql server';
		}else {
			$conn->query($sql);

		}

		//NOW WE CAN MAKE THE CONNECTION INCLUDING THE DATABASE VARIABLE
		$conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

		return $conn;
	}

}

//FOR TESTING PURPOSES
//$db = new db();
//$db->conn();

?>