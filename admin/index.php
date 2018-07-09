<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
</head>
<body>
	<h2>Login to the admin panel</h2>
	<?php

	if (!empty($_SESSION['error'])) {
		echo "<h4 style=\"color:red\">".$_SESSION['error']."</h4>";
		unset($_SESSION['error']);
	} else if (!empty($_SESSION['success'])) {
		echo "<h4 style=\"color:green\">".$_SESSION['success']."</h4>";
		unset($_SESSION['success']);
	}

	?>
	<form action="../includes/controllers/admin/login.php" method="post">
		<input type="text" name="email"/>
		<input type="password" name="password"/>
		<input type="submit" value="Login"/>
	</form>
</body>
</html>