
<?php
 function say_hello($word){
 	return "Hello {$word}!";
 }

 function redirect_to($new_location){
 	header("Location: " . $new_location);
 }

?>

