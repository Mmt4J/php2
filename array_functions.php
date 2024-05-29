<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>  array functions </title>

</head>

<body bgcolor = "yellow">


	<?php $numbers = array(8,23,15,42,16,4); ?>

	Count:			<?php echo count($numbers);?> <br/>
		Max value:			<?php echo max($numbers);?> <br/>
			Min value:			<?php echo min($numbers);?> <br/>
<br/>

<pre>
Sort: <?php sort($numbers);  print_r($numbers); // print in ascending order?> <br/>
Reverse sort: <?php rsort($numbers);  print_r($numbers); // print in descending order?> <br/>
</pre>

<br/>

Implode: <?php echo $num_string = implode(" * ", $numbers); // chip-in the asteric to seperate the numbers?> <br/>
Explode: <?php print_r(explode(" * ", $num_string)); //?> <br/>
<br/>

Is 15 in array?: <?php echo in_array(15, $numbers); // returns T/F ?> <br/>
Is 19 in array?: <?php echo in_array(19, $numbers); // returns T/F ?> <br/>

</body>