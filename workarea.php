<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "test";
	
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	// Test if connection occurred.
	if(mysqli_connect_errno()) {
		die("Database connection failed: " .
			mysqli_connect_error() . 
			" (" . mysqli_connect_errno() . ")"
			);
	}
?>

<?php
	// 2. Perform database query
	$query  = "SELECT * FROM administrator";
	#$query .= "WHERE visible = 1 ";
	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if (!$result) {
		die("Database query failed.");
	}
	
	
	
	
	

?>
<!DOCTYPE>

<html lang="En">

<head>
	<title> Databases </title>

</head>

<body bgcolor = "orange">
	
	<ul>
	<?php
	while($admin = mysqli_fetch_assoc($result)) { ?>
		<li><?php echo $admin["name"] . " (" . $admin["password"] . ")";  ?></li>
<?php }
	?>	
		
	</ul>
	

	<?php mysqli_free_result($result); ?>

</body>
</html>

	<?php mysqli_close($connection); ?>