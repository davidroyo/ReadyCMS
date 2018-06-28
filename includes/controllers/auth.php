<?php

include_once '../models/dbconn.php';

class auth {
    function register($username, $email, $password, $password2) {
        //check if password mactch with repeat password input
        if ($password != $password2) {
            return 1;
        } else {
            $sql = "INSERT INTO users (htmlentities($username), htmlentities($email), crypt($password))";
		    $db = new db();
		    // execute query
            if(!$db->conn()->query($sql)) {
                echo 'could not create user';
            }else {
                echo 'User registered succeful';
            }
        }
    }
} 
