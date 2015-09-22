<html>
	<head>
		<title>Multi-Array</title>
	</head>
	<body>
	<?php 
	$cars = array
			(
			array("BAJAJ",22,18),
			array("TVS",20,12),
			array("HONDA",18,17),
			array("SUZUKI",15,17),
			);
	
	echo	
		$cars[0][0]." : In stock : " .$cars[0][1]. " Sold : " .$cars[0][2]. ".<br>"
		.$cars[1][0]." : In stock : " .$cars[1][1]. " Sold : " .$cars[1][2]. ".<br>"
		.$cars[2][0]." : In stock : " .$cars[2][1]. " Sold : " .$cars[2][2]. ".<br>"
		.$cars[3][0]." : In stock : " .$cars[3][1]. " Sold : " .$cars[3][2]. ".<br>" ;
	
	
	?>
	</body>
</html>