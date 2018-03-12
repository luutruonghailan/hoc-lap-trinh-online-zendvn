<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Chuyển đổi chữ hoa, chữ thường</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php
	$str	= "Php iS easy"; 
?>
	<div class="content1">
		<h1>Chuyển đổi chữ hoa, chữ thường</h1>
		<ul class="function">
			<li><span>source</span><?php echo $str;?></li>
			<li><span>strtoupper</span><?php echo strtoupper($str);?></li>
			<li><span>strtolower</span><?php echo strtolower($str);?></li>
			<li><span>ucfirst</span><?php echo ucfirst($str);?></li>
			<li><span>ucwords</span><?php echo ucwords($str);?></li>
		</ul>
	</div>
</body>
</html>