<html>
	<head>
		<title>Select Data in sql PHP</title>
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
	$sql="SELECT id,firstname,lastname from myguest";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0){
		//output data of each row
		while($row=mysqli_fetch_assoc($result)){
			echo "ID :".$row["id"]. " Name : ".$row["firstname"]." ".$row["lastname"]. "<br>" ;
		}
	}else{
		echo "0 result.";
	}
	function data_table(){
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
	$sql="SELECT id,firstname,lastname from myguest";
	$result=mysqli_query($conn,$sql);
		
		
		
	if(mysqli_num_rows($result)>0){
		
		echo "<br><br><table border=1><tr bgcolor=cyan><th>ID</th><th>NAME</th></tr>";
		//output data of each row
		while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
			
		}
		echo "</table>";
	}else{
		echo "0 result";
	}	
	}
	data_table();
	mysqli_close($conn);
	
	
	
	?>
	
	</body>
	</html>