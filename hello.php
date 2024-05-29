<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> Hello World </title>

</head>

<body bgcolor = "#773322">
<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
?>
<?php echo "Hello world <br/>";  ?>
<?php echo "Hello" . " world! <br/>"; ?>
<?php

/* string exercise with double
line comment*/

$first = " Adebayo Fajinmi was born over two decades in a hamlet called, Omojaro.
He hails from Igbajo, Boluwaduro West LCDC area, Osun State, Nigeria.
As a boy who was not born rich<br/> "; 
$second = "and at his early life, he lost his 
father but he has never allowed his circumstances to limit him. although,
many people have written him off and some have given him cheap options 
out-of compassion to live his life. However, he had a dream and his 
prospensity and quest for knowledge is immeasurable, he wwould prefer
to spend every single money in his pocket on books than clothes, 
shoes or any other things.</p>";
$third = "<p>Adebayo had his elementary/primary education at Success Private
School, situated in a neigbouring village  called Alonge, but along the
time he suffer ill health and had to stay at home for some years before 
he later went to Triumph Academy School in his own village where he 
graduated.";
?>

<?php
#single line comment, concatenation
//echo "$first" . " $second" . "$third" ;

?>
<br><br>
<?php
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>

<?php
function familyName($fname) {
    $message = "$fname Refsnes.<br>";
    return $message;
}

echo familyName("Jani");
echo familyName("Hege");
echo familyName("Stale");
echo familyName("Kai Jim");
echo familyName("Borge");

function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

?>
</body>