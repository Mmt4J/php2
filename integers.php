<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> integers </title>

</head>

<body bgcolor = "yellow">


	<?php
		$var1 = 3;
		$var2 = 4;
	?>
BODMAS/BEDMAS<br/>
Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?> <br/>
<br/>

<u>Int. Functi	on</u> <br/>
Absolute value: 		<?php echo  abs(0 - 300); 		?> 	<br/>
Exponential: 			<?php echo  pow(2,8); 			?> 	<br/>
Square root: 			<?php echo  sqrt(100); 			?> 	<br/>

Modulo:			 		<?php echo  fmod(20,7); 		?> 	<br/>
Random:	 				<?php echo  ((rand())); 	 	?> 	<br/>
Random (min,max): 		<?php echo  rand(1,10); 		?> 	<br/>
<br/>

<?php $var2 += 4; echo $var2;	?> <br/> 
<?php $var2 -= 4; echo $var2;	?> <br/>  
<?php $var2 *= 4; echo $var2;	?> <br/> 
<?php $var2 /= 4; echo $var2;	?> <br/>  	
<br/>

INCREAMENT|DECREAMENT <br/>
<?php $var2++; echo $var2; ?> <br/>
<?php $var2--; echo $var2; ?> <br/>

<p> 
<?php//falanaolumide@gmail.com owolarafe@gmail.com

$random =  rand(1,10);
$random += 100;

echo strtoupper("Cs{$random}PT");

?>
</p>

</body>