<html>

<head>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h1>Wolfenstein LAN-party</h1>

	<h2>Deltagere:</h2>
	<div id="deltagere">
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

		$sql = "SELECT * FROM people";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "<li>" . $row["name"] . "</li>";
			}
		} else {
			echo "Ingen deltagere";
		}
		$conn->close();
		?>
	</div>

</body>

</html>