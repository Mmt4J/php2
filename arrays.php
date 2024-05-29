<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> arrays </title>

</head>

<body bgcolor = "yellow">


	<?php

		$numbers = array(4,8,15,16,23,42);
		echo "array in store one is {$numbers[2]}";

	?>

<br/>

	<?php 
		$mixed = array(6, "fox", "dog", array("x", "y", "z"));
		echo "$mixed[2] <br/>";
		$mixed[2] = "cat"; 				//replace any object with cat in the second position 
		$mixed[4] = "mouse"; 			// add mouse to the array in the fourth position
		$mixed[] = "mouse"; 			//if you dont know where the array ends
		$mixed [3][1] = "Matthew"; 		//replace y in the second array in first position with Matthew
		
	?>

	<pre>
	<?php echo print_r($mixed); ?>
	</pre>


<br/>
	<?php echo $mixed[3][0]?>

</body>