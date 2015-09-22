<html>
<head>
	<title>Function</title>
	</head>
	<body>
	
	<?php
	global $a ; //global variable
	$a=5;
	
	function myTest()
		{
		$x=5;
		$y=6;
		$z=2;
		echo "The final answer is <b>" .($x+$y+$z). "</b><br>";
		}
	myTest();
	
	function myTest2()
	{
		global $a ;
		echo "&nbsp This is alternate answer <b>".$a."</b> <br>";
	}
	myTest2();
	
	function myTest3()
	{
		static $x=0;
		echo $x;
		$x++;
	}
	echo "<br><br><b>Series is :</b><br>";
	myTest3();
	echo "<br>";
	myTest3();
	echo "<br>";
	myTest3();
	echo "<br>";
	myTest3();
	echo "<br>";
	myTest3();
	echo "<br>";
	myTest3();
	echo "<br>";
	
	
		$x = 55.5;
		
		var_dump($x);
		global $a ;
		var_dump($a);
		
		echo "<b>This is Array</b> eg<br>";
		$cars=array("TATA","Hyundai","Toyota","Ford","BMW","Honda");
		var_dump($cars);
		echo "<br>";
		
		echo "<b>Boolean example</b><br>";
		$xa= true;
		$xb= false;
		
		if($xa=true){					//if..else
			echo "Statement is TRUE" ;
		}else{
			echo "Statement is FALSE";
		}
	
	?>	
	</body>
</html>