<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
	<?php
		function checkNumber($value){
			echo $value . "<br />";
			if($value % 2 == 0) {
				return true;
			}else{
				return false;
			}
		}
		
		$result = checkNumber(90);
		if($result==true){
			echo "Số chắn";
		}else{
			echo "Số lẻ";
		}
	?>
		
			
		
		
	</div>
</body>
</html>