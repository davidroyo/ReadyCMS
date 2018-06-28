<?php

class db {
	private function conn() {

		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "root";
		$this->database = "";

		$conn = new mysqli($this->servername, $this->username, $this->password);

		return $conn;
	}

	private function initialize() {

		$sql = "
		CREATE DATABASE readycms;
		";

		if(!$this->conn()) {
			echo 'Could not connect to sql server';
		}else {
			if(!$this->conn()->query($sql)) {
				echo 'Failed creating database readycms, may already be created';
			} else {
				echo 'database created';
				return true;
			}
		}
	}
}

?>