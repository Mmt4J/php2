<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> associative arrays  </title>

</head>

<body bgcolor = "yellow">


	<?php 
	$assoc = array("first_name" => "Matthew", "last_name" => "Ayodele", "sur_name" => "Alabi" );

		print $assoc["last_name"] . " " . "\n"; 

		echo $assoc["first_name"] ; 

		echo $assoc["sur_name"] ; 
	?>

<br/>


	<?php echo $assoc["sur_name"] . " " . $assoc["first_name"] . " " . $assoc["last_name"]; ?>
<br/>

	<?php 
	$assoc["sur_name"] = "Anthony";

	echo $assoc["sur_name"] . " " . $assoc["first_name"] . " " . $assoc["last_name"]; 
	?>


</body>