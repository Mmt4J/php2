<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="En">

<head>
	<title>HTML: Encoding</title>

</head>

<body bgcolor = "yellow">

	<?php $linktext = "<Click> & learn more"; ?>


		<a href ="">
		<?php echo htmlspecialchars($linktext); ?>
		</a>
	

		<br />
		<?php // what to use when

		$url_page = "php/created/page/url.php";
		$param1 = "This is string with";
		$param2 = "&#?*$[]+ are bad characters";
		$lintext = "<Click> & learn more"; 


		$url = "http:localhost/";
		$url .= rawurlencode($url_page);
		$url .= "?" . "param1=" . urlencode($param1);
		$url .= "&" . "param2=" . urlencode($param2);
		?>

		<a href="<?php echo htmlspecialchars($url); ?>"> <?php echo htmlspecialchars($linktext); ?> </a>

</body>
