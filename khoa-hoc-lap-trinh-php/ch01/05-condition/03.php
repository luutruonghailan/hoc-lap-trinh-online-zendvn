<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$number = -11;
	
	if($number >= 0 && $number % 2 == 0){
		$result = "Nguyên dương chắn";
	}else if($number >= 0 && $number % 2 == 1){
		$result = "Nguyên dương lẻ";
	}else if($number < 0 && $number % 2 == 0){
		$result = "Nguyên âm chắn";
	} else {
		$result = "Nguyên âm lẻ";
	}
	
	echo $result;