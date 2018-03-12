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
			$month	= 2;
			$year	= 2013;
			
			$timeStampe = mktime(0, 0, 0, $month, 1, $year);
			echo $totalDays	= date('t', $timeStampe);
		?>
	</div>
</body>
</html>