<html>
	<head>
		<title>Form Complete</title>
	</head>
	<style>
	.error{color:#FF0000;}
	</style>
	<body>
	<?php
		//defines variables and set to empty values
		$name = $email = $gender = $comment	= $website = "";
		$nameErr = $emailErr = $genderErr = $commentErr	= $websiteErr = "";
		
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST["name"])){
				$nameErr = "Name is required";
			}else{
			$name=test_input($_POST["name"]);   //call function name test_input()
			
			if(!preg_match("/^[a-zA-Z ]*$/",$name)){
				$nameErr="Only letters and white space allowed";
			}
			}
			
			if(empty($_POST["email"])){
				$emailErr = "E-mail is required";
			}else{
			$email=test_input($_POST["email"]);
			
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$emailErr="Invalid email format";
			}
			}
			
			if(empty($_POST["website"])){
				$websiteErr = "Website required";
			}else{
			$website=test_input($_POST["website"]);
			
			if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
				$websiteErr="Invalid URL";
			}
			}

			if(empty($_POST["comment"])){
				$comment = "";
			}else{
			$comment=test_input($_POST["comment"]);
			}
			
			if(empty($_POST["gender"])){
				$genderErr = "Gender is required";
			}else{
			$gender=test_input($_POST["gender"]);
			}
		}
			
	function test_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data; 
		} 
	
	
	?>
		<h2>PHP Form Validation</h2>
		
		<fieldset>
		<legend>Personal Details</legend>
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		NAME :<input type="text" name="name" value="<?php echo $name; ?>">
		<span class="error">*<?php echo $nameErr; ?></span>
		<br><br>
		
		E-MAIL :<input type="text" name="email" value="<?php echo $email; ?>">
		<span class="error">*<?php echo $emailErr; ?></span>
		<br><br>
		
		WEBSITE :<input type="text" name="website" value="<?php echo $website; ?>">
		<span class="error">*<?php echo $websiteErr; ?></span>
		<br><br>
		
		COMMENT :<textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
				<br><br>
				
		GENDER :
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
			<span class="error">*<?php echo $genderErr; ?></span>
			<br><br>
			<input type="submit" name="submit" value="Submit">
		</form>
		</fieldset>
		
		<?php
		echo "<h2>Your Input:</h2>";
		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $website;
		echo "<br>";
		echo $comment;
		echo "<br>";
		echo $gender;
		
		?>
	</body>
</html>