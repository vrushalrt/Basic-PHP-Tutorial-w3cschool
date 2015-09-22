<html>
	<head>
		<title>Loops</title>
	</head>
	
	<body>
	<?php
	global $x;
	$x=1;
	
	function while1()
	{
	echo "WHILE loop eg: x=1...5 ";
	
	global $x;
	//$x=1;
	while($x<=5){
	echo "The no is: $x <br>";
	$x++;
	}
	}
	while1();
	
	function dowhile()
	{
	echo "<br>Do While loop eg: y=1...5<br>";
	
	//global $x;
	$y=1;
	do{
		echo "The number is : $y <br>";
		$y++;
	}while($y<=5);
	}
	dowhile();
	
	function forloop()
	{
		echo "<br>FOR Loop eg: a=0..5<br>";
		for($a=0 ; $a<=5 ; $a++)
		{
			echo "The number is : $a <br>";
		}
	}
	forloop();
	
	function foreach1()
	{
		echo "<br>FOREACH loop<br>";
		$color= array("red","green","blue","yellow");
		foreach($color as $value){
		echo "$value <br>";
		}
	}
	foreach1();
		?>
	</body> 
	</html>
	