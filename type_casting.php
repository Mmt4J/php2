<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> type juggling and type casting  </title>

</head>

<body bgcolor = "yellow">

	<b>Type Juggling</b> <br/>
<p>
	<?php $count = "2 cats" ; ?>
	Type: <?php echo gettype($count); ?> <br/>

	<?php $count += 3; ?>
	Type: <?php echo gettype($count) ; ?> <br/>

	<?php $cats = "I have " . $count . " cats."; ?>
	Cats: <?php echo gettype($cats); ?>

</p>

	<b>Type Castting</b> <br/>
<P>
	<?php settype($count, "integer"); ?>
	Count: <?php echo gettype($count); ?> <br/>

	<?php $count2 = (string) $count; ?>
	Count: <?php echo gettype($count); ?><br/>
	Count2: <?php echo gettype($count2) ; ?> <br/>


	<?php 
			$test1 = 3;
			$test2 = 3;

		settype($test1, "string");
		(string) $test2;
	?>

	test1: <?php echo gettype($test1); ?> <br/>
	test2: <?php echo gettype($test2); ?> <br/>
</p>

</body>