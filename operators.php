<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>  comparison and logical operators </title>

</head>

<body bgcolor = "yellow">
<u><b>Logical AND</b></u><br/>

<?php
	$a = 4;
	$b = 3;
	$c = 8;
	$d = 20;
	if (($a > $b) && ($c > $d)){
		echo "a is larger than b AND ";
		echo "c is larger than d";
	}
?>

<br/>

<p>
<u><b>Logical OR</b></u><br/>

<?php
	if (($a > $b) || ($c > $d)){
		echo "a is larger than b OR ";
		echo "c is not larger than d";
	}
?>

<br/>
</p>

<p>
<u><b>Not Set</b></u><br/>

<?php
	//$e = 100;
	if (!isset($e)){
		$e = 200;
	}
	echo $e;
?>

</p>

<u><b>How to REJECT </b></u><br/>

<?php
	// don't reject 0 or 0.0
	$quantity = "";
	if (empty($quantity) && !is_numeric($quantity)){
		echo "You must enter a quantity.";
	}
?>

</p>

</body>