<?php
	$array1	= array(2,3,1);	
	$array2	= array(7,8,9);	
	
	function myFunction($n1, $n2){
		$result = $n1 * $n2;
		return $result;
	}
	
	$newArr	= array_map("myFunction", $array1, $array2);
	
	
	echo "<pre>";
	print_r($newArr);	// 14 24 9
	echo "</pre>";