<?php
	// Seesions use cookies which use heaers.
	// Must start before any HTML output
	// unless output buffering is turned on.
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>   </title>

</head>

<body bgcolor = "yellow">
	<?php
		$_SESSION["first_name"] =  "Matthew";
		$name = $_SESSION["first_name"];
		echo $name;
	?>
</body>
</html>
