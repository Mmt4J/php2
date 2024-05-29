<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>  null </title>

</head>

<body bgcolor = "yellow">


	<?php
		$var1 = null;
		$var2 = "";
	?>

	Is var1 null? <?php echo is_null($var1); ?> <br/>
	Is var1 null? <?php echo is_null($var2); ?> <br/>
	Is var1 null? <?php echo is_null($var3); ?> <br/>
	<br/>

	Is var1 null? <?php $var3 = false;  echo isset($var1); ?> <br/>
	Is var1 null? <?php echo isset($var2); ?> <br/>
	Is var1 null? <?php echo isset($var3); ?> <br/>
	<br/>
<?php // empty: "", null, 0, 0.0, "0", false, array() ?>

</body>