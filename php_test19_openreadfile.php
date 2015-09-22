<html>
	<head>
		<title>File OPEN / READ</title>
	</head>
	<body>
	<?php 
	$myfile=fopen("sample1.txt","r") or die("Unable to open file!");
	echo fread($myfile,filesize("sample1.txt"));
	
	
	?>
	</body>
</html>