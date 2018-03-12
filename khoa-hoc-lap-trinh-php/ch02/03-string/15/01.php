<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Trích xuất nội dung</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php
	$str	= "Php is easy"; 

?>
	<div class="content1">
		<h1>Trích xuất nội dung</h1>
		<ul class="function">
			<li><span>source</span><?php echo $str;?></li>
			<li><span>substr($str, 0, 3)</span><?php echo substr($str, 0, 3);?></li>
			<li><span>substr($str, 3, 3)</span><?php echo substr($str, 3, 3);?></li>
			<li><span>substr($str, 3, -3)</span><?php echo substr($str, 3, -3);?></li>
			<li><span>substr($str, -3, 3)</span><?php echo substr($str, -3, 3);?></li>
			<li><span>substr($str, -3, 0)</span><?php echo substr($str, -3, 0);?></li>
			<li><span>substr($str, -3, -3)</span><?php echo substr($str, -3, -3);?></li>


		</ul>
	</div>
</body>
</html>