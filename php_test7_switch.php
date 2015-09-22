<html>
	<head>
		<title>Switch</title>
	</head>
	
	<body>
	<?php
	
	$favocolor = "blue" ;
	
	switch($favocolor){
		
		case "red":
		echo "Your color is <font color=red>RED</font><br>" ;
		break;
		
		case "green":
		echo "Your color is <font color =green>GREEN</font><br>" ;
		break;
		
		case "blue": 
		echo "Your color is <font color=blue>BLUE</font><br>" ;
		break;
		
		default:
		echo "Your color is neither Red, Green and Blue<br>" ;
		break;
	}
	
	
	?>
	</body>
	</html>