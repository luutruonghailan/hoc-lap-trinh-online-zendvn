<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Break - Continue</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content4">
		<h1>Giải câu đố bằng vòng lặp</h1>
		<div class="question">
			<p>Yêu nhau cau sáu bổ ba</p>
			<p>Ghét nhau cau sáu bổ ra làm mười</p>
			<p>Mỗi người một miếng trăm người</p>
			<p>Có mười bảy quả hỏi người ghét yêu</p>
			<p>Hỏi có bao nhiêu người yêu nhau, ghét nhau ?</p>
		</div>
		<div class="answer">
			<p>Đáp án</p>
			<ul>
			<?php
				for($x = 1; $x <= 16; $x++){
					for($y = 1; $y <= 9; $y++){
						if(3*$x + 10*$y == 100 && $x + $y == 17){
							echo "<li>$x người yêu nhau, $y người ghét nhau</li>";
						}
					}
				}
			?>
			</ul>
		</div>
	</div>
</body>
</html>
