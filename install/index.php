<!DOCTYPE html>
<html>
<head>
	<title>Installation</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<h1>Installation page</h1>

	<p>Here the user should be able to:</p>
	<ol>
		<li>Enter the database credentials</li>
		<li>Enter the credentials for the new admin account</li>
		<li>That's it</li>
	</ol>

	<h2>Enter the database credentials and the name for the new database</h2>

	<form class="installation-database" action="../includes/controllers/installation/startDatabase.php" method="post">
		<label for="servername">Server name</label>
		<input type="text" id="servername" name="servername" placeholder="localhost">
		<label for="username">Username</label>
		<input type="text" id="username" name="username" placeholder="root">
		<label for="password">Password</label>
		<input type="text" id="password" name="password" placeholder="password">
		<label for="database">Database name</label>
		<input type="text" id="database" name="database" placeholder="database">
		<input type="submit" value="Continue">
	</form>
</body>
</html>