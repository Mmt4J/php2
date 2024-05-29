<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> loopps: foreach  </title>

</head>

<body bgcolor = "yellow">

<p><b>foreach using array</b><br/>
	<?php
		$ages = array(4,8,15,16,23,42)	;

		foreach($ages as $age){
			echo "Age: {$age}<br/>";
		} 


	?>
</p>

	<br/>
<p>	
	<b>foreach using assoc. array</b><br/>
	<?php
	// foreeach using assoc. array

	$person = array(
				"first_name"	=> "Kelvin",
				"last_name"	 	=> "Skoglund",
				"address"	 	=> "123 Main Street",
				"city"			=> "Beverly Hills",
				"state"			=> "CA",
				"zip_code"		=> "90210",
				);
	foreach($person as $attribute => $data){
	
		$name = ucwords(str_replace("_", " ", $attribute));

		$location = ucfirst($data);
		echo "{$name}: {$location} <br/>"; 	
	}

	?>
</P>
<p>
<br/>
		<b>foreach using assoc. array</b><br/>
<?php 	
 		// When we are tallking about array, 
		//for each loop is the first structure statement to consider first.
	
	$prices = array("Brand New Computer" => 2000, 
					"1 month of Linda.com" => 25, 
					"Learning PHP" => null);

	foreach($prices as $item => $price){
		echo "{$item}: ";
		if (is_int($price)){
			echo "$" . $price;
		} else {
			echo "priceless";
		}
		echo "<br/>";
	}


?>
</p>
</body>