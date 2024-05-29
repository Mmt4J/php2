<?php 
$x = 75; 
$y = 25;
 
function addition() { 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
 
addition(); 
echo $z; 
echo '</br>';
function subtraction() { 
    $GLOBALS['a'] = $GLOBALS['y'] - $GLOBALS['x']; 
}
 subtraction();
 echo $a;

?>
