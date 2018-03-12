<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$number = -21;
	if($number % 2 == 0){
		$result = "Số chắn";
	}else{
		$result = "Số lẻ";
	}
	
	$result = ($number % 2 == 0) ? "Số chắn" : "Số lẻ";
	echo $result;