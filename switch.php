<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>  switch </title>

</head>

<body bgcolor = "yellow">    
	<?php
	$a = 3;

	switch($a){
		case 0:
		echo "a equals 0 <br/>";
		break;
		case 1:
		echo "a equals 1 <br/>";
		break;
		case 2:
		echo "a equals 2 <br/>";
		break;
		case 3:
		echo "a equals 3 <br/>";
		break;
		case 4:
		echo "a equals 4 <br/>";
		break;
		default:
		echo "a is not 0, 1, 2, 3 or 4 <br/>";
		break;
	}
	?>

<br/>

<?php

	$year = 2014;
	switch(($year - 4) % 12){ //Find the modulo. i.e the remainder after been divided by 12
		case 0:
		$zodiac = 'Rate';
		break;
		case 1:
		$zodiac = 'Ox';
		break;
		case 2:
		$zodiac = 'Tiger';
		break;
		case 3:
		$zodiac = 'Rabbit';
		break;
		case 4:
		$zodiac = 'Dragon';
		break;
		case 5:
		$zodiac = 'Snake';
		break;
		case 6:
		$zodiac = 'Horse';
		break;
		case 7:
		$zodiac = 'Goat';
		break;
		case 8:
		$zodiac = 'Monkey';
		break;
		case 9:
		$zodiac = 'Rooster';
		break;
		case 10:
		$zodiac = 'Dog';
		break;
		case 11:
		$zodiac = 'Pig';
		break;
	}
		echo "{$year} is the year of the {$zodiac}";
?>

<br/>
<p>
	<?php 
		$user_type = 'student';
		
		switch($user_type){
			case 'student':
				echo "Welcome";
				break;
			case 'press':
			case 'customer':
			case 'admin':
				echo "Hello";
		}
	?>
</p>
</body>