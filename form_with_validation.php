<?php
	require_once("include_functions.php");
	require_once("validation_functions.php");

	$errors = array();
	$message = "";

	if (isset($_POST['submit'])) {
		// form was submitted
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);

		// Validations 
		$fields_required = array("username", "password");
		foreach($fields_required as $field) {
			$value = trim($_POST[$field]);
			if (!has_presence($value)) {
				$errors[$field] = ucfirst($field) . " can't be blank";	
			}
		}

		// Using an assoc. array
		$fields_with_max_lengths = array("username" => 30, "password" => 8);
		foreach($fields_with_max_lengths as $field => $max) {
			$value = trim($_POST[$field]);
			if (!has_max_length($value, $max)){
				$errors[$field] = ucfirst($field) . " is too long";
			}
		}



		if (empty($errors)) {

		// try to login
		if ($username == "mary" && $password == "admin"){
			//successful login
			redirect_to("index.php");
		} else {
			$message = "Username/password do not match."; 
		}
	}
		
	} else {
		$username = "";
		$message = "Please log in.";
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>Form Single</title>

</head>

<body bgcolor = "yellow">

	<?php echo $message; ?>
	<?php echo form_errors($errors);?>
	
	<form action= "form_with_validation.php" method="post">
		Username:<input type="text" name="username" value="<?php echo htmlspecialchars($username)?>"/><br/>
		Password:<input type="password" name="password" value=""/><br/>
		<input type="submit" name="submit" value="submit"/>
	</form>
</body>
</html>
