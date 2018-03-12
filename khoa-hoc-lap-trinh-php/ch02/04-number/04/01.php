<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Làm tròn số</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php
	$number	= 8.5; 	// 8 9
?>
	<div class="content1">
		<h1>Làm tròn số</h1>
		<ul class="function">
			<li><span>source</span><?php echo $number;?></li>
			<li><span>round()</span><?php echo round($number);?></li>
			<li><span>round( n, 0)</span><?php echo round($number,0);?></li>
			<li><span>round( n, 0)</span><?php echo round($number,0);?></li>
			<li><span>round( n, 0, PHP_ROUND_HALF_UP)</span><?php echo round($number,0, PHP_ROUND_HALF_UP);?></li>
			<li><span>round( n, 0, PHP_ROUND_HALF_DOWN)</span><?php echo round($number,0, PHP_ROUND_HALF_DOWN);?></li>
			<li><span>round( n, 0, PHP_ROUND_HALF_ODD)</span><?php echo round($number,0, PHP_ROUND_HALF_ODD);?></li>
			<li><span>round( n, 0, PHP_ROUND_HALF_EVEN)</span><?php echo round($number,0, PHP_ROUND_HALF_EVEN);?></li>
		</ul>
	</div>
</body>
</html>