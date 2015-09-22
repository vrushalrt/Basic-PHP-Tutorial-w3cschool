<html>
	<head>
		<title>DB Table lastID</title>
	</head>
	<body>
	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="mydb";
	
	//create connection
	$conn= mysqli_connect($servername,$username,$password,$dbname);
	
	//check connection
	if(!$conn){
		die("Connection Failed:".mysqli_connect_errno(). " " .mysqli_connect_error());		
	}
	
	$sql="INSERT INTO MyGuest(firstname,lastname,email)
			VALUES('John','Doe','john@example.com')";
		if(mysqli_query($conn,$sql)){
			$last_id=mysqli_insert_id($conn);
			echo "New record created successfully. Last inserted ID is :".$last_id ;
		}else{
			echo "Error :".$sql."<br>".mysqli_errno($conn). " ".mysqli_error($conn) ;
		}
		mysqli_close($conn);
	
	
	
	?>	
	</body>
	</html>