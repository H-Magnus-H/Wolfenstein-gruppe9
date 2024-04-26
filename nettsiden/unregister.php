<?php
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

session_start();

$id = $_SESSION["id"];

$sql = "DELETE FROM people where id = $id";

if ($conn->query($sql) === TRUE) {
	echo "Unregistered";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

session_unset();

header("Location: index.php");
die();