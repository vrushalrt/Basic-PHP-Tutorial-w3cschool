<html>
	<head>
		<title>CONSTANT</title>
	</head>
	
	<body>
	<?php 
	//Define
	define("GREETING", "Welcome to My World!","false"); //define(name, value, case-insensitive)
	echo GREETING;
	echo "<br>";
	echo greeting ;
		
	
	//Global constant are global
	echo "<br>";
	function mytest(){
		echo GREETING ;
	}
	
	mytest(); // calling fuinction mytest 
	echo "<br><br>";
	echo "String Concatenation <br>";
	$sa="Hello";
	$sb="world";
	
	echo $sa.$sb ;
		echo "<br><br>";
	
	$x = 100;
	$y = 50;

	if ($x == 100 || $y == 80) {
     echo "Hello world!";
	}
	
	
		echo "<br><br>";
	$x = array("a" => "red", "b" => "green");
	$y = array("c" => "blue", "d" => "yellow");

	var_dump($x !== $y);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
	</body>
</html>