<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Làm việc với thời gian</title>
	<link rel="stylesheet" href="../css/style.css" />


</head>
<body>
	<div class="content">
		<h1>Làm việc với thời gian</h1>
		<?php
			// Leap year: n chia het cho 4 và (n chia het 400 hoặc n khong chia het cho 100) 
			// n % 400 == 0 || (n % 4 == 0 && n % 100 != 0)		
			function testLeapYear($year){
				$flag = false;
				if( ($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0) ) $flag = true;
				return $flag;
			}
			
			$year = 2012;
			if(testLeapYear($year)){
				echo "Năm nhuận";
			}else {
				echo "Không là Năm nhuận";
			}
		?>
	</div>
</body>
</html>