<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title> Break  </title>

</head>

<body bgcolor = "yellow">
<?php
	for ($count=0; $count <= 10; $count++){
		if ($count == 5) { break;}
		echo $count . ", ";
	}
?>

<br/>

<?php
// loop inside loop break.
	for ($i=0; $i<=5; $i++){
		if ($i %2 == 0) { continue(1); }
		for ($k=0; $k<=5; $k++){
			if ($k == 3) { break(2); }
			echo $i . "-" . $k . "<br/>";
		}
	}

?>
<br>
<?php
// loop inside loop break.
$r=0;
while($r < 10){
	$r++;
	if($r == 5){
		continue;
	}
	echo $r;
}
?>

</body>