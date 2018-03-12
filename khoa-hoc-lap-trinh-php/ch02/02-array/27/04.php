<?php
	$array	= array(2,4,6,8); // 4,8,12,16
	
	function myFunction(&$value, $key, $param = 2){
		$value = $value * $param;
	}
	
	array_walk($array, "myFunction", 3);
	
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	