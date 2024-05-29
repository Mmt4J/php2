<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>Second Page</title>

</head>

<body bgcolor = "yellow">

	<pre>
		<?php
		//print_r($_GET)
		?>
	</pre>
	<?php
		$id = $_GET['id'];
		echo $id ;
	?>
<br/>
	<?php
		$company = $_GET['company'];
		echo $company ;
	?>
</body>