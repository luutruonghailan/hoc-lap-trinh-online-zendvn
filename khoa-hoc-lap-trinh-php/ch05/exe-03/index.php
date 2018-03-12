<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="content" style="text-align: left;">
		<h1>PHP OOP</h1>
		<?php
			require_once 'PhanSo.class.php';

			$ps1 = new PhanSo(2, 7);
			$ps2 = new PhanSo(3, 14);
			
			// 2/7 : 3/14 = 2/7 * 14/3 = 28/21 = 4/3
			$ps1->thuongPS($ps2);
			$ps1->showPS();
		?>
	</div>
</body>
</html>