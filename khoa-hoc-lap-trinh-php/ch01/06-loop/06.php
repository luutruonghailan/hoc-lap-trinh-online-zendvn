<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Break - Continue</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
	

<body>
	<?php
		$n  = 0;
		for($i = 0; $i <= 100; $i+=8){
			if($n < 3) {
				if($i % 8 == 0 && $i > 0) {
					echo $i . "<br />";
					$n++;
				}
			} else {
				break;
			}
		} 
	?>
</body>
</html>
