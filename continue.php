<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> continue  </title>

</head>

<body bgcolor = "yellow">

<?php
// when $count is equal to 5, skip 5 and continue
	for ($count=0; $count <= 10; $count++) {
		if ($count == 5) {
			continue;
		}
		echo $count . ", ";
	}

?>

<br/>

<?php
// if $count devided by 2 remains 0, skip and continue
	for ($count=0; $count <= 10; $count++) {
		if ($count % 2 == 0) { continue; }
		echo $count . ", ";
	}

?>

<br/>

<?php
/* if $i divide by 2 remains 0, skip and go to the next figure
output the value of $i with $k simulteneously, respectively */
	
	for ($i=0; $i<=5; $i++){
		if ($i % 2 == 0) { continue; }
		for ($k=0; $k<=5; $k++) {
			if ($k == 3) { continue; }
			echo $i . "-" . $k . "<br/>";
		}
	}

?> 




</body>