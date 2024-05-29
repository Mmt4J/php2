<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> Functions: Arguemengts  </title>

</head>

<body bgcolor = "yellow">
	<?php
		function say_hello_to($word) {
			echo "Hello {$word}!<br/>";
		}

		$name = "John Doe";
		say_hello_to("$name");
	?>

	<?php
		function better_hello($greeting, $target, $punct) {
			echo $greeting . " " . $target . $punct . "<br/>";
		}

		better_hello("Hello", $name, "!");
		better_hello("Greetings", $name, "!!!");

		better_hello("Greetings", $name, null);
	?>

</body>