<?php
session_start();

if (isset($_SESSION["id"])) {
	header("Location: registered.php");
	die();
}

$name = $_POST["name"];

$servername = "localhost";
$username = "root";
$password = "root";
$database = "lan";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO people (name) VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
	$last_id = $conn->insert_id;
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$_SESSION["id"] = $last_id;

$conn->close();

header("Location: registered.php");
die();