<?php
	session_start();
	if(!isset($_SESSION["username"])){
		header("Location: admin.php");
		exit(); 
	}
?>
<html>
<head>
	<title>Welcome Admin!</title>
	<script type='text/javascript'
		src='http://code.jquery.com/jquery-1.11.0.js'></script>
	<script type='text/javascript'>
	$(window).load(function(){
		$("#theButton").on("click", function(){
			$("body").first().css("background-color", "lightblue");
		});
	});
	</script>
</head>
<body>
	<form action="admin.php" method="post">
		<h1 style="color:black">Welcome, <?php echo $_SESSION['username']; ?></h1>
		<table>
			<?php
				//establishes connection to database
				$conDB = mysqli_connect("localhost", "root", "", "lab2");
 
				if($conDB === false){
					die("No connection to MySQL. " . mysqli_connect_error());
				}
 
				//exectues sql query and makes table accessible to admin user
				$sqlQuery = "SELECT * FROM users ORDER BY username ASC";
				
				if($result = mysqli_query($conDB, $sqlQuery)){
					if(mysqli_num_rows($result) > 0){
						echo "<table>";
							echo "<tr>";
								echo "<th>userId</th>";
								echo "<th>username</th>";
						echo "</tr>";
							
						while($row = mysqli_fetch_array($result)){
							echo "<tr>";
								echo "<td>" . $row['userId'] . "</td>";
								echo "<td>" . $row['username'] . "</td>";
							echo "</tr>";
						}
						echo "</table>";
						mysqli_free_result($result);	
					} 
					else{
						echo "No records matching your query were found.";
					}
				} 
				else{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($conDB);
				}
 
				// Closes connection to db
				mysqli_close($conDB);

			?>
		</table>
		<button type="submit">Logout</button>
			<a href="admin.php"></a>
		<input type="button" id="theButton"value="Toggle Color"><br><br>
	</form>
</body>
</html>