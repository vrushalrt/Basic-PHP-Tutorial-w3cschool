<html>
	<head>
		<title>Update record sql php</title>
	</head>
	<body>
	<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
    die("Connection failed: ".mysqli_connect_errno(). " ". mysqli_connect_error());
	}

	$sql = "UPDATE myguest SET lastname='Doe' WHERE id=2";

	if (mysqli_query($conn, $sql)) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: ".mysqli_errno($conn)."&nbsp " . mysqli_error($conn);
	}

	mysqli_close($conn);
	?>
	</body>
</html>