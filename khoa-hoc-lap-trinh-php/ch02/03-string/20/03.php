<?php
	$str1	= "Php is easy";
	$str2	= "easy";
	
	$result = substr_compare($str1, $str2, -4, 4);
	echo $result;