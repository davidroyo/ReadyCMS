<?php

session_start();
require '../../models/user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$email = $_POST['email'];
	$password = $_POST['password'];

	$user = new user();

	if (//!$user->login($email, $password)
		0 == 1) {
		$_SESSION['error'] = "Email or password's incorrect";
		header('Location: /admin/index.php');
		return false;
	}else {
		$_SESSION['success'] = "You logged in successfully";
		header('Location: /admin/index.php');
		return true;
	}

}else {
	echo 'You are not allowed to perform this action';
	return false;
}

?>