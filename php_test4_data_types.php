<html>
	<head>
		<title>Data Types</title>
	</head>
	
	<body>
	<?php
	echo "Data Type" ;
	$x = 10.365;
	var_dump($x); //return datatype of variable
	echo "<br>";
	
	echo "object<br>";
	
	class Car{
		function Car(){
			$this->model="VW";
		}
	}
	//create an object
	$herbie = new Car();
	//show object properties
	echo $herbie->model;
	
	echo "<br>";
	

			
	
	
	?>
	</body>
</html>