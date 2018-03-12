<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Vẽ tam giác</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
	

<body>
	<div class="content2">
		<h1>Vẽ tam giác</h1>
		<ul>
			<li><a href="03.php?type=1"><img src="images/01.png" /></a></li>
			<li><a href="03.php?type=2"><img src="images/02.png" /></a></li>
			<li><a href="03.php?type=3"><img src="images/03.png" /></a></li>
		</ul>
		<div class="result">
			<?php
				$result = "";
				if(isset($_GET["type"])){
					$type = $_GET["type"];
					switch ($type) {
						case 1:
							$i = 1;
							$n = 6;
							while($i <= $n){
								$result .= str_repeat("*",$i) . "<br />";
								$i++;
							}
							break;
						case 2:
							$i = 6;
							$n = 6;
							while($i >= 1){
								$result .= str_repeat("*",$i) . "<br />";
								$i--;
							}
							break;
						case 3:
							$i = 1;
							$n = 6;
							/*
							 		$n = 6
							          *			i = 1, space = 5, * = 1	(space = n - i) (* = i * 2 - 1)
							         ***		i = 2, space = 4, * = 3
							        *****		i = 3, space = 3, * = 5
							       *******
							      *********
							     ***********
							*/
							while($i <= $n){
								$space  	= str_repeat("&nbsp;&nbsp;",$n - $i);
								$character  = str_repeat("0",2*$i - 1);
								$result .= $space . $character . "<br />"; 
								$i++;	
							}
							break;
						
					}
				} 
				echo $result;
			?>
			
		</div>
    </div>
   
</body>
</html>
