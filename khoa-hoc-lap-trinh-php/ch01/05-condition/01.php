<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$number = 20;
	if($number % 2 == 0){
		$result = "Số chắn";
	}
	
	$result = ($number % 2 == 0) ? "Số chắn" : "";
	echo $result;