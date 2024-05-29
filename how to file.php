https://www.itsolutionstuff.com/post/php-mysql-simple-image-gallery-crud-example-from-scratchexample.html
https://phpgurukul.com/crud-operation-with-image-using-php-and-mysqli/

//Today we will learn how to create simple image gallery crud using bootstrap, mysql database, 
fancy box and PHP. We will create example from scratch so it will be easy to get full script example.

Sometimes, we almost require to create image gallery or insert update and delete module for user, 
employee, admin, students etc. Photo album will help to easily upload image and remove that with proper validation. 
So we always want to built good bootstrap layout with image gallery. However in this tutorial, we will make photo gallery 
from scratch with good layout that way you can simply built it with your project. I make proper validation using session with 
proper error and success message. So if you insert successfully image then gives proper message with success.

In this example, we will create "image_gallery" table with main 'title' and 'image' columns. I created one files for display 
form and error messages, validation etc. After finish this example you will find layout as like bellow preview:

//Step 1: Create image_gallery table
In this step we will create new new table "image_gallery" in database. You can use following SQL Query for 
create "image_gallery" table. So let's create using bellow sql query

item table:
<?php 
CREATE TABLE `image_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
?>


//Step 2: Create DB Configuration File
In this step, we require to create database configuration file, here we will set database name, username and password of 
phpmyadmin database. So let's create "db_config.php" file on your root directory and put bellow code:

db_config.php
<?php


define (DB_USER, "root");
define (DB_PASSWORD, "root");
define (DB_DATABASE, "sole");
define (DB_HOST, "localhost");


$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
?>

//Step 3: Create Index.php File
Here, we will create index.php file, in this file we will write code for display images with delete button and also display with 
title of image. So let's create index.php file on your root directory and put bellow code.
index.php
<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery Example</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


    <style type="text/css">
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    .close-icon{
    border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
        .form-image-upload{
            background: #e8e8e8 none repeat scroll 0 0;
            padding: 15px;
        }
    </style>
</head>
<body>
<div class="container">


    <h3>PHP - Image Gallery CRUD Example</h3>
    <form action="/imageUpload.php" class="form-image-upload" method="POST" enctype="multipart/form-data">


        <?php if(!empty($_SESSION['error'])){ ?>
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    <li><?php echo $_SESSION['error']; ?></li>
                </ul>
            </div>
        <?php unset($_SESSION['error']); } ?>


        <?php if(!empty($_SESSION['success'])){ ?>
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><?php echo $_SESSION['success']; ?></strong>
        </div>
        <?php unset($_SESSION['success']); } ?>


        <div class="row">
            <div class="col-md-5">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col-md-5">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-2">
                <br/>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>


    </form> 


    <div class="row">
    <div class='list-group gallery'>


            <?php
            require('db_config.php');


            $sql = "SELECT * FROM image_gallery";
            $images = $mysqli->query($sql);


            while($image = $images->fetch_assoc()){


            ?>
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="/uploads/<?php echo $image['image'] ?>">
                        <img class="img-responsive" alt="" src="/uploads/<?php echo $image['image'] ?>" />
                        <div class='text-center'>
                            <small class='text-muted'><?php echo $image['title'] ?></small>
                        </div> <!-- text-center / end -->
                    </a>
                    <form action="/imageDelete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $image['id'] ?>">
                    <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                    </form>
                </div> <!-- col-6 / end -->
            <?php } ?>


        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->


</body>


<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
</html>

//Step 4: Create imageUpload.php File
In this step we will create imageUpload.php file, in this file we will create write code for validation using session, image upload code and insert 
database code, so let's create another file imageUpload.php on your root path and put bellow code.
imageUpload.php
<?php


session_start();
require('db_config.php');


if(isset($_POST) && !empty($_FILES['image']['name']) && !empty($_POST['title'])){


	$name = $_FILES['image']['name'];
	list($txt, $ext) = explode(".", $name);
	$image_name = time().".".$ext;
	$tmp = $_FILES['image']['tmp_name'];


	if(move_uploaded_file($tmp, 'uploads/'.$image_name)){


		$sql = "INSERT INTO image_gallery (title, image) VALUES ('".$_POST['title']."', '".$image_name."')";
		$mysqli->query($sql);


		$_SESSION['success'] = 'Image Uploaded successfully.';
		header("Location: http://localhost:8000");
	}else{
		$_SESSION['error'] = 'image uploading failed';
		header("Location: http://localhost:8000");
	}
}else{
	$_SESSION['error'] = 'Please Select Image or Write title';
	header("Location: http://localhost:8000");
}


?>

//Step 5: Create imageDelete.php File
In this step we will create imageDelete.php file, in this file we will write code for remove records from database, 
so let's create another file imageDelete.php on your root path and put bellow code.
imageDelete.php
<?php


session_start();
require('db_config.php');


if(isset($_POST) && !empty($_POST['id'])){


		$sql = "DELETE FROM image_gallery WHERE id = ".$_POST['id'];
		$mysqli->query($sql);


		$_SESSION['success'] = 'Image Deleted successfully.';
		header("Location: http://localhost:8000");
}else{
	$_SESSION['error'] = 'Please Select Image or Write title';
	header("Location: http://localhost:8000");
}


?>
