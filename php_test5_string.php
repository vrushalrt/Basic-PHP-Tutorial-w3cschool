<html>
	<head>
		<title>STRING</title>
	</head>
	
	<body>
	<?php
	echo "Operations on <b>Hello World</b>";
	echo "<br>";
	echo "<br>";
	
	
	echo strlen("Hello world!"); // outputs 12
	echo "<br>";
	
	echo str_word_count("Hello world!"); // outputs 2
	echo "<br>";	
		
	echo strrev("Hello world!"); // outputs !dlrow olleH
	echo "<br>";
	
	echo strpos("Hello world!", "Hello"); // outputs 6 for world
	echo "<br>";
	
	echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
	echo "<br>";
	
	
	
	
	
	
	?>
	</body>
</html>