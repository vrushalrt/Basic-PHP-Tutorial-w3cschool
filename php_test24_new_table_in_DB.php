<html>
	<head>
		<title>Add TABLE in to DB</title>
	</head>
	
	<body>
	<?php
	
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="myDB";
	
	//create connection
	$conn= mysqli_connect($servername,$username,$password,$dbname);
	
	//check connection
	if(!$conn){
		die("Connecton Failed :" .mysqli_connect_errno()." ".mysqli_connect_error());
	}
	
	//SQL to create table
	$sql="CREATE TABLE MyGuest(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
								firstname VARCHAR(25) NOT NULL,
								lastname VARCHAR(25) NOT NULL,
								email VARCHAR(25),reg_date TIMESTAMP)";
		
		if(mysqli_query($conn,$sql)){
			echo "Table MyGuest created successfully";
		}else{
			echo "Error creating table :".mysqli_errno($conn)." ".mysqli_error($conn);
			
		}
	mysqli_close($conn);
	
	
	
	?>	
	</body>
	
	</html>