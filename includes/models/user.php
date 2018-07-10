<?php

require 'dbconn.php';

class user extends db{

	private $firstname;
	private $lastname;
	private $email;
	private $password;


	public function create($firstname, $lastname, $email, $password) {

		//DEFINE USER INFORMATION
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->email = $email;
		$this->password = $password;


		//INSTANTIATING db CLASS
		$db = new db();
		$conn = $db->conn();

		//DEFINING OUR SQL QUERY
		$sql = "
		INSERT INTO users (firstname, lastname, email, password)
		VALUES ('".$this->firstname."','".$this->lastname."','".$this->email."','".$this->password."');";

		if(!$conn->query($sql)) {
			return false;
		}else{
			//RETURN TRUE IF USER IS CREATED
			return true;
		}
	}

	public function login($email, $password) {

		//DEFINING USER INFORMATION
		$this->email = $email;
		$this->password = $password;

		//INSTANTIATING db CLASS
		$db = new db();
		$conn = $db->conn();


		//EXECUTING QUERY
		$result = $conn->query("SELECT * FROM users WHERE email = '".$this->email."'");


		if ($result->num_rows == 0) {
			return false;
		}

		$row = $result->fetch_assoc();

		if ($this->password != $row['password']) {
			return false;
		}else {
			return true;
		}
	} 
}

?>