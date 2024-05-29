<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> Debugging </title>

</head>

<body bgcolor = "yellow">
	<?php
		$number = 99;
		$string = "Bug?";
		$array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");

		var_dump($number);
		var_dump($string);
		var_dump($array);

	?>


	<?php
		function say_hello_to($word) {
			echo "Hello {$word}! <br/>";
			var_dump(debug_backtrace());
		}

		say_hello_to('Everyone');
	?>
</body>