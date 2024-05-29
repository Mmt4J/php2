<?php
$dbhost = 'localhost'; $dbusername = 'root'; $dbpass = ""; $dbname = 'test';
$db = new mysqli($dbhost, $dbusername, $dbpass, $dbname);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}



if(isset($_POST['uploadfilesub'])){
	$filename = $_FILES['uploadfile']['name'];
	$filetempname = $_FILES['uploadfile']['tmp_name'];
	$folder = 'imageuploadedf/';

	move_uploaded_file($filetempname, $folder.$filename);


$sql = "INSERT INTO imgstore (imgimage, image) VALUES ('$filename', '$filetempname')";

$qry = mysqli_query($db, $sql);
if($qry){
	echo "image uploaded";
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>photo upload</title>
</head>
<body>

<form action="file.php" method="post" enctype="multipart/form-data">
		
		<input type="file" name="uploadfile">
		<input type="submit" name="uploadfilesub" value="upload">	
</form>

</body>
</html>