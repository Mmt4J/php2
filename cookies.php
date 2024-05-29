<?php 

// REMEMBER: Setting cookies must be befor *any* HTML output
//				unless output buffering is turned on.
	$name = "test";
	$value = 45;
	$expire = time() + (60*60*24*7); // add seconds
	//setcookie($name, $value, $expire);

	// setcookie($name);
	// setcookie($name, null, $expire);
	// setcookie($name, $value, time() - 3600);

	// Kevin's recommendation for unsetting cookies:
	setcookie($name, null, time() - 3600);
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>Cookies</title>

</head>

<body bgcolor = "yellow">

<?php 
$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
echo $test;
?>

<?php 
	print_r($_COOKIE);
?>


	</body>
</html>