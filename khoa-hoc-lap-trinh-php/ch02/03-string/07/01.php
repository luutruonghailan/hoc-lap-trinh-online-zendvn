<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Xác định vị trí</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php
	$str	= "hello php is easy, php is easy"; // 6
	$world	= "php";
?>
	<div class="content1">
		<h1>Xác định vị trí</h1>
		<ul class="function">
			<li><span>source</span><?php echo $str;?></li>
			<li><span>world</span><?php echo $world;?></li>
			<li><span>stripos</span><?php echo stripos($str, $world);?></li>
			<li><span>strpos</span><?php echo strpos($str, $world);?></li>
			<li><span>strripos</span><?php echo strripos($str, $world);?></li>
			<li><span>strrpos</span><?php echo strrpos($str, $world);?></li>

		</ul>
	</div>
</body>
</html>