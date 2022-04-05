<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Login</title>

</head>
<body>
<?php
	require('db_connect.php');
	session_start();
	
	//submits form, insert new data values into the database.
	if (isset($_POST['username'])){
		
		//removes backslashes and escape characters from username/password string input to db
		$usrname = stripslashes($_REQUEST['username']);
		$usrname = mysqli_real_escape_string($connect,$usrname);
		$passwrd = stripslashes($_REQUEST['password']); 
		$passwrd = mysqli_real_escape_string($connect,$passwrd); 
		
		//validates user credentials
        $sqlQuery = "SELECT * FROM users WHERE username='$usrname'";
		$result = mysqli_query($connect,$sqlQuery) or die(mysql_error());
		$table = mysqli_num_rows($result);
		
		//allows users that stored in DB to login
		if($table == 1){
			$user_id = $tableRow['userId']; 
			$_SESSION['username'] = $usrname;
			$_SESSION['userId'] = $user_id;
			header("Location: welcome.php");
        }
		else{
			echo "<div class='form'>
					<p style=color:red>Username/Password is incorrect.</p>
				  </div>";
		}
    }
?>
<div class="form">
	<h1>Login</h1>
	<form action="lab2.php" name="login" method="post">
		<input type="text" name="username" placeholder="Username" required /><br>
		<input type="password" name="password" placeholder="Password" required /><br><br>
		<input name="submit" type="submit" value="Login" />
	</form><br>
	<a href='register.php'>New User? Register Here</a>
	<br><br>
	<a href='admin.php'>Administration Login</a>
	</div>
</body>
</html>
