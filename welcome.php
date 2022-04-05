<?php
	session_start();
	if(!isset($_SESSION["username"])){
		header("Location: lab2.php");
		exit(); 
	}
?>
<html>
<head>
	<title>Welcome User!</title>
	<script type='text/javascript'
		src='http://code.jquery.com/jquery-1.11.0.js'></script>
	<script type='text/javascript'>
	$(window).load(function(){
		$("#theButton2").on("click", function(){
			$("body").first().css("background-color", "lightblue");
		});
	});
	</script>
</head>
<body>	
	<form action="lab2.php" method="post">
		<h1 style="color:black">Welcome, <?php echo $_SESSION['username']; ?></h1>
		<button type="submit">Logout</button>
			<a href="lab2.php"></a>
		<input type="button" id="theButton2" value="Toggle Color">
		<br><br>
	</form>
</body>
</html>
