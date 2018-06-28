<?php

include_once 'dbconn.php';

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


		//INSTANTIATING CLASS db AND DEFINING CONNECTION
		$db = new db();
		$conn = $db->conn();

		//DEFINING OUR SQL QUERY
		$sql = "
		INSERT INTO users (firstname, lastname, email, password)
		VALUES ('".$this->firstname."','".$this->lastname."','".$this->email."','".$this->password."');";

		if(!$conn->query($sql)) {
			//RETURN FALSE IF COULD NOT CREATE USER
			echo $this->firstname . $this->lastname . $this->email . "<br>";
			return false;
		}else{
			//RETURN TRUE IF USER IS CREATED
			return true;
		}
	} 
}

?>