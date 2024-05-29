<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>  boolean </title>

</head>

<body bgcolor = "yellow">


	<?php
		$result1 = true;
		$result2 = false;

		echo "result1 is $result1 and result2 is " . " " . "$result2";
	?>
<br/>


	result2 is boolean? <?php echo is_bool($result2) ?>
	<br/>

	<?php
	$number = 3.3;
	if( is_float($number) ){
		echo "It is a float.";
	}
	?>

</body>