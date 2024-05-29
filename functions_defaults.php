<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> Functions: Default Argument Values  </title>

</head>

<body bgcolor = "yellow">

	<?php

		function paint($color = "red", $room = "Office"){
			return "The color of the {$room} is {$color}.<br/>";
		}

		echo paint();
		echo paint("Yellow", "Bedroom");
		echo paint(null, "Bedroom");

	?>


</body>