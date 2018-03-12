<?php
	$array	= array(2,3,1);	// ("even","odd","odd")
	
	$newArr = array();
	foreach ($array as $key => $value){
		$newArr[] = ($value % 2 == 0) ? "even" : "odd";
	}
	
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";