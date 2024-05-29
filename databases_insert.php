<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "secretpassword";
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
	// Often these are form values in $_POST
	$menu_name = "Today's Widget Trivia";
	$position = (int) 9;
	$visible = (int) 1;

	// Escape all Striings
	$menu_name = mysqli_real_escape_string($connection, $menu_name);
	// 2. Perform database query
	
	$query  = "INSERT INTO subjects (";
	$query .= " menu_name, position, visible";
	$query .= ") VALUES (";
	$query .= " '{$menu_name}', {$position}, {$visible}";
	$query .= ")";

	
	$result = mysqli_query($connection, $query);

	if ($result) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
	} else {
		// Faileure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> Databases </title>

</head>

<body bgcolor = "yellow">
	

</body>
</html>

<?php
	// 5. Close database connection
	mysqli_close($connection);
?>