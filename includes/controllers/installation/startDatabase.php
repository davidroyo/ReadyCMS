<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {

	if (!isset($_POST['servername']) && empty($_POST['servername']) || !isset($_POST['username']) && empty($_POST['username']) || !isset($_POST['password']) && empty($_POST['password']) || !isset($_POST['database']) && empty($_POST['database'])) {

		echo 'The request is not valid: missing post parameters.';

	}else {
		echo 'All good!';
	}
}else {
	echo 'The request is not valid';
}

?>