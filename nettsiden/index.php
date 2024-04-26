<?php
session_start();


if (isset($_SESSION["id"])) {
	header("Location: registered.php");
	die();
}
?>

<html>

<head>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h1>Wolfenstein LAN-party</h1>

	<form action="register.php" method="POST">
		Navn: <input type="text" name="name" required><br>
		<input type="submit" value="Registrer">
	</form>

</body>

</html>