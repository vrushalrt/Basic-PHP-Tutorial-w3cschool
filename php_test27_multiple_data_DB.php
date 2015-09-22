<html>
	<head>
		<title>Insert Multiple Data</title>
	</head>
	<body>
	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="mydb";
	
	//create connection
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	//check connection
	if(!$conn){
		die("Connection Failed :".mysqli_connect_errno()." " .mysqli_connect_error());
	}
	$sql="INSERT INTO myguest(firstname,lastname,email)
			VALUES('John','Doe','john@example.com');";
	
	$sql .= "INSERT INTO myguest(firstname, lastname, email)
			VALUES ('Mary', 'Moe', 'mary@example.com');";
	$sql .= "INSERT INTO myguest(firstname, lastname, email)
			VALUES ('Julie', 'Dooley', 'julie@example.com')";
			
	if(mysqli_multi_query($conn,$sql)){
		echo "New records created successfully";
	}else{
		echo "Error:".$sql."<br>".mysqli_connect_errorno($conn)." ".mysqli_error($conn);
	}
	mysqli_close($conn);
	
	
	?>	
	</body>
	</html>