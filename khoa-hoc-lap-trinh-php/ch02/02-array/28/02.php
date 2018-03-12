<?php
	$array	= array(2,3,1);	// ("even","odd","odd")
	
	function checkNumber($number){
		$result = ($number % 2 ==0) ? "even" : "odd";
		return $result;
	}
	
	$newArr	= array_map("checkNumber", $array);
	
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";