<?php
	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
		}

		$logged_in = $_GET['logged_in'];
		if ($logged_in == "1") {
			redirect_to("index.php");
		} else {
			redirect_to("http://www.lynda.com")
		}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>Redirect</title>

</head>

<body bgcolor = "yellow">


</body>