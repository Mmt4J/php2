<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> loops: for  </title>

</head>

<body bgcolor = "yellow">
<p><b>while loop example</b><br/>
	

	<?php
		// while loop example
		$count = 0;
		while ($count <= 10) {
			echo $count . " , ";
			$count++;
		}

	?>
</p>


<p><b>for loop example</b><br/>
	<?php

		for($I = 0; $I <= 10; $I++){
		echo $I . " , ";
		
		}



	?>

	<br/>

	<?php
		for($number = 20; $number > 0; $number--){
			if($number % 2 == 0){
				echo "{$number} is even.<br/>";
			} else {
				echo "{$number} is odd. <br/>";
			}
		}

	?>
</p>

<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>

</body>