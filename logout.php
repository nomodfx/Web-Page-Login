<?php
	session_start();
	
	//Destroys login session for both user and admin and redirects back to home page
	if(session_destroy()){
		header("Location: lab2.php");
	}
?> 
