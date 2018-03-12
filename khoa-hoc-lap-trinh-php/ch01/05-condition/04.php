<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$number = 88;
	$n		= $number % 2;
	
	$resultFirst 	= ($number >= 0) ? "Nguyên dương" : "Nguyên âm";
	$resultLast 	= ($n == 0) ? "chắn" : "lẻ";
	
	$result = $resultFirst . " " . $resultLast;
	echo $result;