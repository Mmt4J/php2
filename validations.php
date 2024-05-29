<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>Validation</title>

</head>

<body bgcolor = "yellow">
	<?php
	// * presence
		$value = "d";
		if (!isset($value) || empty($value)){
			echo "Validation failed <br />";
		}

	// * string length
		//min lenght
		$value = "sam";
		$min = 3;
		if (strlen($value) < ($min)){
			echo "Validation failed <br />";	
		}

		//max lenght
		$value = "samuelalabiayodele";
		$min = 10;
		if (strlen($value) > ($min)){
			echo "Validation failed <br /> Please try again<br />";	
		}


	// * type
		$value = 4;
		if (!is_string($value)){
			echo "Validation failed <br /> ";	
		}

	// * inclusion in a set
		$value="5";
		$set = array("1", "2", "3", "4");
		if (!in_array($value, $set)) {
			echo "Validation failed.<br />";
		}
	// * uniqueness
		//use a database to check uniqu


	// * format
		// preg_match($regex, $subject)
		$user = "PHP is fun.";
		if (preg_match("/PHP/", $user )){
			echo "A match was found.";
		} else {
			echo "A match was not found";
		}

	?>
</body>
</html>