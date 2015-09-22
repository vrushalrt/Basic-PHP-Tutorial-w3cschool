<html>
	<head>
		<title>include & require</title>
	</head>
	<style>
	.follow{color:#FF0000;}
	</style>
	<body>
	<?php
	include 'menu.php';
	?>
	<h1>Welcome to my Home Page</h2>
	<p>This blog belongs to everything about technology and its applications,</p>
	as well as technology trends.</br>
	</br>
	<?php 
	include 'follow.php';
	?>
	<span class="follow">
	<?php echo "Follow us on <br> "; ?>
	</span>
	<?php
	echo "Facebook : $facebook <br> 
	Twitter : $twitter <br>
	Instagram : $insta<br>";
	include 'footer.php';
	
	?>
	
	
	
	</body>
	</html>