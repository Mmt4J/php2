<?php
	require_once("include_functions.php");

	if (isset($_POST['submit'])) {
		// form was submitted
		$username = $_POST["username"];
		$password = $_POST["password"];

		if ($username == "mary" && $password == "admin"){
			//successful login
			redirect_to("index.php");
		} else {
			$message = "There were some errors."; 
		} 
		
	} else {
		$username ="";
		$message = "Please log in";
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

	<form action= "form_single.php" method="post">
		Username:<input type="text" name="username" value="<?php echo htmlspecialchars($username)?>"/><br/>
		Password:<input type="password" name="password" value=""/><br/>
		<input type="submit" name="submit" value="submit"/>
	</form>
</body>
</html>
