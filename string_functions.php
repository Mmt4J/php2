<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> string functions </title>

</head>

<body bgcolor = "yellow">

<?php
$first = "The quick brown fox";
$second = " jump over the lazy dog.";

$third = $first;
$third .= $second;

echo "$third <br/>";
?>

<p>
Lowercase: <?php echo strtolower($third); ?> <br/>
Uppercase: <?php echo strtoupper($third); ?> <br/>
Uppercase first: <?php echo ucfirst($third); ?> <br/>
Uppercase words: <?php echo ucwords($third); ?> <br/>
</p>

<p>
Length: <?php echo strlen($third);?> <br/>
Trim: <?php echo "A" . trim(" B C D") . "E"; ?> <br/>
Find: <?php echo strstr($third, "fox"); ?> <br/>
Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?><br/>
</p>

Repeat: <?php echo str_repeat($third, 2);?> <br/>
Make substrinng: <?php echo substr($third, 4, 15); ?> <br/>
Find position: <?php echo strpos($third, "brown"); ?> <br/>
Find character: <?php echo strchr($third, "y"); ?> <br/>


</body>
</html>




