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
	$id = 6;
	$menu_name = "Edit me";
	$position = 6;
	$visible = 1;

	// Escape all Strings
	$menu_name = mysqli_real_escape_string($connection, $menu_name);
	// 2. Perform database query
	
	$query  = "UPDATE subjects SET ";
	$query .= " menu_name = '{$menu_name}', ";
	$query .= "position = {$position}, ";
	$query .= "visible = {$visible} ";
	$query .= "WHERE id = {$id}";


	$result = mysqli_query($connection, $query);

	if ($result && mysqli_affected_rows($connection) == 1) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
	} else {
		// Faileure
		// $message = "Subject update failed";
		die("Database query failed. " . mysqli_error($connection));
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> Databases Update </title>

</head>

<body bgcolor = "yellow">
	

</body>
</html>

<?php
	// 5. Close database connection
	mysqli_close($connection);
?>