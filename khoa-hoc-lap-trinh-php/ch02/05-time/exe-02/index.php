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
			// 03:09 PM Thứ 3, ngày 18/06/2013
			// 03:09 PM Tue, 18/06/2013		
		
			$result = date('h:i A D, \n\g\à\y d/m/Y', time());
			
			$arrEn	= array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
			$arrVi	= array('Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật');
			
			$result	= str_replace($arrEn, $arrVi, $result);
			//$result	= str_replace(',', ', ngày', $result);
			
			echo $result;
		?>
	</div>
</body>
</html>