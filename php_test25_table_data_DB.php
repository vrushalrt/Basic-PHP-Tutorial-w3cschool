<html>
	<head>
		<title>Data in Table</title>
	</head>
	<body>
	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="myDB";
	
	//create connection
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	//check connection
	if(!$conn){
		die("Connection Failed :" .mysqli_errno(). " ".mysqli_error());
	}
	
	$sql="INSERT INTO MyGuest (firstname, lastname, email)
			VALUES('John','Doe','john@example.com')";
			
	if(mysqli_query($conn,$sql)){
		echo "New record created successfully";
	}else{
		echo "Error:".$sql."<br>".mysqli_errno($conn)." ".mysqli_error($conn);
	}
	mysqli_close($conn);
		
	?>
	
	</body>
	</html>