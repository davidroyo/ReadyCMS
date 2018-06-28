<?php

include_once '../models/dbconn.php';

class auth {
    function register($username, $email, $password, $password2) {
        //check if password mactch with repeat password input
        if ($password != $password2) {
            return 1;
        } else {
            $sql = "INSERT INTO users htmlentities($username), htmlentities($email), crypt($password)";
            $db = new db();
					  // execute query
            if(!$db->conn()->query($sql)) {
                echo 'could not create user';
            }else {
                echo 'User registered succeful';
            }
        }
    }
	
	function login($username, $password) {
	    $sql = "SELECT * FROM users WHERE email = htmlentities($username), password = crypt($password)";
	  	$db = new db();
		  // execute query
      if(!$db->conn()->query($sql)fetch_array(MYSQLI_ASSOC);) {
          echo 'User found';
      }else {
          echo 'User or password not found';
      }	
	 }
} 
