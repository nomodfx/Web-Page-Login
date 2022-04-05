<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>

</head>
<body>
<?php
	require('db_connect.php');
	session_start();
	
	//submits admin login to database
	if(isset($_POST['username'])){
		
		//removes backslashes and escape characters from username/password string input to db
		$usrname = stripslashes($_REQUEST['username']);
		$usrname = mysqli_real_escape_string($connect,$usrname);
		$passwrd = stripslashes($_REQUEST['password']); 
		$passwrd = mysqli_real_escape_string($connect,$passwrd); 
		
		
		//prevents normal users from logging in with admin credentials 
		$sqlQuery = "SELECT * FROM users WHERE username='$usrname' AND userId='1'";
		$result = mysqli_query($connect,$sqlQuery) or die(mysql_error());
		$table = mysqli_num_rows($result);
		
		if($table == 1){
			$user_id = $_SESSION['userId']; 
			$_SESSION['username'] = $usrname;
			header("Location: welcomeAdmin.php");
		}
		else{	
			echo "<div class='form'>
					<p style=color:red>No Admin rights.</p>
					<br/>Back to <a href='admin.php'>Admin Login</a>
				  </div>";
			exit();
        }
    }
?>
<div class="form">
	<h1>Admin Login</h1>
	<form action="admin.php" name="login" method="post">
		<input type="text" name="username" placeholder="Username" required /><br>
		<input type="password" name="password" placeholder="Password" required /><br><br>
		<input name="submit" type="submit" value="Login" /><br><br>
			<a href="lab2.php">Not Admin?</a>
	</form>
	</div>
</body>
</html>
