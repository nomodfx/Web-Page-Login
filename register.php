<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

</head>
<body>
<?php
	require('db_connect.php');
	
	//successful insertion of new user information 
	if (isset($_REQUEST['username'])){

		//removes backslashes and escape characters from username/password string input to db
		$usrname = stripslashes($_REQUEST['username']);
		$usrname = mysqli_real_escape_string($connect,$usrname);
		$passwrd = stripslashes($_REQUEST['password']); 
		$passwrd = mysqli_real_escape_string($connect,$passwrd); 
		
		//validates if username exists 
		$sql = "SELECT * FROM users WHERE username='$usrname'";
		$result = mysqli_query($connect, $sql);
		
		//prevents new users from registering with usernames alread in database 
		if(mysqli_num_rows($result) > 0) {
			echo "<div class='form'>
					<p style=color:red>Username already exists.</p>
				  </div>";
		}
		else if(preg_match("/[~`!@#$%^&()_={}[\]:;,.<>+\/?-]/", $usrname)){
			echo "<div class='form'>
					<p style=color:red>Invalid username.</p>
				  </div>";
		}
		else{
			//obtains sql data and inserts new data into table
			//hashes password and stores server side hash not text hash
			$sqlQuery = "INSERT INTO users (username, password) VALUES ('$usrname', '".md5(uniqid($passwrd, true))."')";
			$table = mysqli_query($connect,$sqlQuery);
	
			if($table){
				echo "<div class='form'>
						<p style=color:red>You are registered successfully.</p>
					</div>";
			}
		}
	}
?>
	<div class="form">
	<h1>Register</h1>
	<form name="register" method="post" action="">
		<input type="text" name="username" placeholder="Username" required />
		<br>
		<input type="password" name="password" placeholder="Password" required />
		<br><br>
		<input type="submit" name="submit" value="Register" />
		<br><br>
			<a href="lab2.php">Back to login</p>
	</form>
	</div>
</body>
</html>
