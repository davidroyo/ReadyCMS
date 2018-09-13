<?php

require '../../models/dbconn.php';
require '../../models/migrate.php';

if (session_status() == PHP_SESSION_NONE) {
	session_start();	
}


$servername = $_SESSION['servername'] = $_POST['servername'];
$username = $_SESSION['username'] = $_POST['username'];
$password = $_SESSION['password'] = $_POST['password'];
$database = $_SESSION['database'] = $_POST['database'];


if ($_SERVER['REQUEST_METHOD'] == "POST") {

	if (!isset($_POST['servername']) && empty($_POST['servername']) || !isset($_POST['username']) && empty($_POST['username']) || !isset($_POST['password']) && empty($_POST['password']) || !isset($_POST['database']) && empty($_POST['database'])) {

		die('The request is not valid: missing post parameters.');

	}

	echo 'All good! <br>';
	$db = new db;

	if(!$db->conn($servername, $username, $password, $database)) {
		die('There was an error tying to connect or create database <br>');
	}

	echo 'Successfully connected to database <br>';

	$migrate = new migrate;

	$migrate->createTables();

	//WRITE HERE THE CODE TO INSERT THE DATABASE CREDENTIALS INTO THE DATABASE

}else {
	echo 'The request is not valid';
}

?>