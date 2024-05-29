<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> loops: while  </title>

</head>

<body bgcolor = "yellow">

	<?php
		$count = 0;
		while($count <= 10){
			if ($count == 5){
				echo "FIVE, " ;
			}else{
			
			echo $count . " , " ;
			} 
			$count++; // increament by 1
		}
		echo "<br/>";
		echo "Count: {$count}";
	?>
	<br/>
<pre>
	<?php
		$I = 2;
		$J = 0;
		while($J <= 12){
			
			$K = $I * $J;

			//print_r("{$I} * {$J} = {$K}" . " , ") ;
			echo "{$I} * {$J} = {$K}" . " <br/>";

			$J++;
		}


	?>
	

<br/>
<b>Even Odd Examples</b><br/>
	<?php
	$number = 0;
	while($number < 20){
		$number++;
		if($number % 2 == 0){
			echo "{$number} is even. <br/>";
		} else {
			echo "{$number} is odd. <br/>";
			
		}
	}
	?>
</pre>

</body>