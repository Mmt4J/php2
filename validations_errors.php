<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>Validations Errors</title>

</head>

<body bgcolor = "yellow">

	<?php

	$errors = array();
	// * presence
		//* use === to avoid false positive
		// empty would consider "0" to be empty
		$value = "";
		if (!isset($value) || empty($value)) {
			$errors['value'] = "Value can't be blank" ;
		}

	/*// * string length
		//min lenght
		$value = "sam";
		$min = 3;
		if (strlen($value) < ($min)){
			echo "Validation failed <br />";	
		}*/


	// * string length
		//min lenght
		$value = "sam";
		$min = 3;
		if (strlen($value) < ($min)){
			$errors['value'] = "vlaue must be less than 3";
		}


		//max lenght
		$value = "samuel";
		$min = 10;
		if (strlen($value) > ($min)){
			echo "Validation failed <br /> Please try again<br />";	
		}


	// * type
		$value = "";
		if (!is_string($value)){
			echo "Validation failed <br /> ";	
		}

	// * inclusion in a set
		$value="4";
		$set = array("1", "2", "3", "4");
		if (!in_array($value, $set)) {
			echo "Validation failed.<br />";
		}
	// * uniqueness
		//use a database to check uniqu


	// * format
		
	
	?>

	<?php
		//if (!empty($errors)) {
		//	//redirect_to("index.php");
		//	include("form.php");
		//} else {
		//	include("success.php");
		//}

		function form_errors($errors=array()) {
			$output = "";
			if (!empty($errors)) {
				$output .= "<div class=\"error\">";
				$output .= "Please fix the following errors:";
				$output .= "<ul>";
				foreach ($errors as $key => $error){
					$output .= "<li>{$error}</li>";
				}
				$output .= "</ul>";
				$output .= "</div>";
			}
			return $output;
		}
	?>
	<?php echo form_errors($errors);?>
</body>
</html>