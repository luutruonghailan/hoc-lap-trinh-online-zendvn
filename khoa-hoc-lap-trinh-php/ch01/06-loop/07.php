<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Break - Continue</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
	

<body>
	<?php
		for($i = 0; $i <= 10; $i++){
			if($i==3 || $i==8) continue;
			echo $i . "<br />";
		} 
	?>
</body>
</html>
