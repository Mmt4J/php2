<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "widget_corp";
	
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
	$query  = "SELECT * FROM subjects ORDER BY position ASC";
	#$query .= "WHERE visible = 1 ";
	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if (!$result) {
		die("Database query failed.");
	}
	
	
	
	
	
	
	
	
	
	//$query  = "SELECT * ";
	//$query .= "FROM subjects ";
	#$query .= "WHERE visible = 1 ";
	//$query .= "ORDER BY position ASC";
	//$result = mysqli_query($connection, $query);
	// Test if there was a query error
	//if (!$result) {
//		die("Database query failed.");
//	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> Databases </title>

</head>

<body bgcolor = "yellow">
	<ul>
	<?php
	// 3. Use return data if any
		while($subject = mysqli_fetch_assoc($result)) {
			//output data from each row
	?>
	
		<li><?php echo $subject["menu_name"] . " (" . $subject["id"] . ")";  ?></li>
	<?php
	
	}

	?>	
		
	</ul>
	
		<?php
		// 4. Free or Release the returnd data
		mysqli_free_result($result);
		?>

</body>
</html>

	<?php
		// 5. Close database connection
		mysqli_close($connection);
	?>