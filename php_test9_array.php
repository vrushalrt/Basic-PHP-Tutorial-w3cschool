<html>
	<head>
		<title>Array</title>
	</head>
	
	<body>
	<?php
	echo "This is eg. of Array in php <br>";
	$cars= array("Volvo","BMW","Toyota","Maruti","Suzuki");
	echo "I like " .$cars[3]. "," .$cars[4]. ", and " .$cars[1]. ".<br>" ;
	echo "Also" .$cars[0]. " and " .$cars[2]. " .<br><br>" ;
	
	echo "Array Sorting<br>";
	sort($cars);
	
	$clength =count($cars);
	
	for($x=0;$x<$clength;$x++){
	echo $cars[$x];
	echo "<br>";
		
	}
	
	
	?>
	</body>
</html>
	
	
	