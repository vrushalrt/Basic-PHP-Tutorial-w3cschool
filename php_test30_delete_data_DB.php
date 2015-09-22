<html>
	<head>
		<title>Delete Record</title>
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
		die("connection failed :".mysqli_connect_errno()." ".mysqli_connect_error());		
	}
	
	//SQL to delete record.
	$sql="DELETE FROM myguest WHERE id=3";
	
	if(mysqli_query($conn,$sql)){
		echo "Record deleted successfully";
	}else{
		echo "Error Deleting record :".mysqli_errno($conn)." ".mysqli_error($conn);
	}
	mysqli_close($conn);
	
	
	
	
	
	
	?>	
	</body>
</html>