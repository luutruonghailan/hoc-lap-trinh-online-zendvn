<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Image gallery</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
	

<body>
	<div class="content3">
		<h1>Image gallery</h1>
		<div class="image">
			<?php
				 $i = 1;
				 do{
				 	echo '<img src="images/nature-0'.$i.'.jpg" />';
				 	$flagShow = 0;
				 	if(isset($_GET["show"])){
				 		$flagShow = $_GET["show"];
				 		$i++;
				 	}
				 }while($i <= 4 && $flagShow == 1);
			?>
			<a href="05.php?show=1">Show All</a>
			<a href="05.php?show=0">Show demo</a>
		</div>
    </div>
</body>
</html>
