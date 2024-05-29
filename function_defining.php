<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> Functions: Defining   </title>

</head>

<body bgcolor = "yellow">


<?php
	function say_hello() {
		echo "Hello World! <br/>";
	}
	say_hello();

	function say_hello_to($word) {
		echo "Hello {$word}! <br/>";
	}
	say_hello_to("World");
	say_hello_to("Everyone");


	say_hello_loudly();

	function say_hello_loudly(){
		echo "HELLO WORLD! <br/>";
	}

?>

</body>