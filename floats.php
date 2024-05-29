<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> floats </title>

</head>

<body bgcolor = "yellow">


<?php echo $float = 3.14; ?> <br/>

<?php echo $float + 7; ?> <br/>

<?php echo 4/3; ?> <br/>

<br/>

Round: <?php echo round($float, 1); ?> <br/>

Ceiling: <?php echo ceil($float); // ceiling round-up to higher int?> <br/>

Floor: <?php echo floor($float); // floor rounds-down to lower int?> <br/>

<br/>

<?php 

$var1 = 3; 
$var2 = 2.1;

?>

<?php echo "Is {$var1} integer?" . is_int($var1); ?> <br/>
<?php echo "Is {$var2} integer?" . is_int($var2); ?> <br/>

<br/>

<?php echo "Is {$var1} float?" . is_float($var1); ?> <br/>
<?php echo "Is {$var2} float?" . is_float($var2); ?> <br/>

<br/>

<?php echo "Is {$var1} numeric?" . is_numeric($var1); ?> <br/>
<?php echo "Is {$var2} numeric?" . is_numeric($var2); ?> <br/>

</body>