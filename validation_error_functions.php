<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>Validations Error Functions</title>

</head>

<body bgcolor = "yellow">

	<?php
	// Validation reusable function explored
		require_once ('validation_functions.php');

	$errors = array();

	//$username = trim($_POST["username"]);
	$username = trim(" ");
	$password = trim(" ");
	if (!has_presence($username)) {
		$errors['username'] = "Username can't be blank";
	}

	?>

	<?php echo form_errors($errors);?>

</body>
</html>