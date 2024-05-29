<?php
$dbhost = 'localhost'; $dbusername = 'root'; $dbpass = ""; $dbname = 'test';
$db = new mysqli($dbhost, $dbusername, $dbpass, $dbname);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}



if(isset($_POST['submit'])){
	if(getimagesize($_FILES['image']['tmp_name']) == FALSE){
		echo 'Please select an image';
	}else{
	$image = addslashes($_FILES['image']['tmp_name']);
	$name = addslashes($_FILES['image']['name']);
	$image = file_get_contents($image);
	$image = base64_encode($image);
	$mail = $_POST['mail'];

	$sql = "INSERT INTO imgstoree (name, image, email) VALUES ('$name', '$image', '$mail')";
	$qry = mysqli_query($db, $sql);
	if($qry){
		echo "<br> image uploaded";
	}else{
		echo "<br> image not uploaded";
	}


	}
}


$con = "SELECT * FROM imgstoree";
$qry = mysqli_query($db, $con);

	while ($row = mysqli_fetch_array($qry)) {
		echo '<img height = "100" width="100 "src="data:image;base64, '.$row[2].' ">';
	}

	mysqli_close($db);
?>



<!DOCTYPE html>
<html>
<head>
	<title>photo upload</title>
</head>
<body>

<form action="anotherimg.php" method="post" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="text" name="mail">
		<input type="submit" name="submit" value="Upload">

</form>

</body>
</html>