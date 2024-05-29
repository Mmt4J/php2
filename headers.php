<?php
header("HTTP 1.1/ 404 Not Found");
header("X-Powered-By: none of your business");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>Headers</title>

</head>

<body bgcolor = "yellow">
<?php
	//this can not work here except the output_buffering is turned on!
	//header("HTTP 1.1/ 404 Not Found");
?>
<pre>
<?php
	print_r(headers_list());
?> 
</pre>
</body>