<?php

require 'dbconn.php';

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

class manage extends db {

	public function insertDatabaseInfo($table, $servername, $username, $passwd, $dbname) {

		//NOW BUILDING THE FUNCTION WHICH WILL PREPARE AND INSERT THE DATA

		//if ($_SESSION['servername'] == NULL) {
		//	return false;
		//}


		//FIGURE OUT A WAY TO WRITE ALL THE COLUM VALUES AND VALUES IN PHP

		$sql = 
		"
		INSERT INTO ".$table." (servername, username, passwd, dbname)
		VALUES (".$servername.", ".$username.", ".$passwd.", ".$dbname.")
		";

		}

		$db = new db();

		if (!$db->query($sql)) {
			die('Could not insert the database info into the database table');
		}

		

	}

	protected function update() {

	}

	protected function delete() {

	}

}

$manage = new manage();

$table = 'proves';
$column = ['noms', 'cognoms'];
$value = ['David', 'Royo'];

$manage->insert($table, $column, $value);

?>