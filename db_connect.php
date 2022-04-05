<?php
	//connect variable is set to default XAMPP settings
	//server=localhost, user=root, no password, database=lab2, and port#3306
	$connect = mysqli_connect("localhost","root","","lab2");

	//No connection established 
	if (mysqli_connect_errno()){
		echo "No connection to MySQL: " . mysqli_connect_error();
	}
?>