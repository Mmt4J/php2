<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> Functions: Scope </title>

</head>

<body bgcolor = "yellow">

	<?php
		$bar = "outside";		// global scope

		function foo(){
			global $bar;
			if (isset($bar)) {
				echo "foo: " . $bar . "<br/>";
			}
			$bar = "inside"; // local scope
		}

		echo "1: " . $bar . "<br/>";
		foo();
		echo "2: " . $bar . "<br/>";


	?>

</body>