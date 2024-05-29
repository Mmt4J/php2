<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>  Functions: Multiple Returns </title>

</head>

<body bgcolor = "yellow">

	<?php
		function add_subt($val1, $val2){
			$add = $val1 + $val2;
			$subt = $val1 - $val2;
			$something = ($val2 * $val1) -  $val1;
			return array($add, $subt, $something);

		}
		$result_array = add_subt(24, 20);
		echo "Add: " . $result_array[0] . "<br/>" ;
		echo "subt: " . $result_array[1] . "<br/>" ;
		echo "something: " . $result_array[2] . "<br/>" ;
		
		echo "<hr>" ;
		
		list($add_result, $subt_result) = add_subt(14, 10);
		echo "Add: " . $add_result . "<br/>" ;
		echo "subt: " . $subt_result . "<br/>" ;
	?>


</body> 