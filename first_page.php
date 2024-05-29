<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> First Page </title>

</head>

<body bgcolor = "yellow">

	<?php $link_name = "Second Page"; ?>
	<?php 
		$id = 2; 
		$company = "Johnson & Johnson";
	?>

	<a href="second_page.php?id=<?php echo $id; ?>
		&company=<?php echo urlencode($company);?>"><?php echo $link_name; ?></a>

<br/>

	
</body>