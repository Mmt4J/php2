<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> logical  </title>

</head>

<body bgcolor = "yellow">

	<?php
		$a = 5;
		$b = 5;

		if($a > $b) {
			echo "a is greater than b";
		} elseif($a < $b){
			echo "a is not larger than b";
		}else{
			echo "a is equal to b";
	}
	?>
	<br/>

	<?php // Only welcome new users
	$new_user = true;
	if($new_user){
		echo "<h1>Welcome</h1>";
		echo "<p>We are glad you decided to join us.</p>";
	}
	?>

	<br/>

	<?php // don't divide by zero
	$numerator = 20;
	$denominator = 4;
	if($denominator > 0){
		$result = $numerator / $denominator;

	}
	?>

	<?php echo "Result: {$result}";  ?>

</body>