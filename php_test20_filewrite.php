<html>
	<head>
		<title>File write</title>
	</head>
	<style>
	.file1{color:#FF0000;}
	</style>
	<body>
	<?php 
	$myfile=fopen("newfile.txt","w") or die("Unable to open file!");
	$txt="John Doe\n";
	fwrite($myfile,$txt);
	$txt="Jane Doe\n";
	fwrite($myfile,$txt);
	
	?>
	<span class="file1">
	<a href="newfile.txt">Open File </a><br>
	<a href="http://localhost/Begining_demos/overwrite_php_test20.php">OVERWRITE FILE</A>
	</span>
	</body>
	</html>