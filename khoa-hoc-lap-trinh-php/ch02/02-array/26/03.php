<?php
	$array1		= array("name" => "PHP", "time" => 120, "zend", "joomla");		
	$array2		= array("PHP", "time" => 120);										
	
	$diff		= array_diff_assoc($array1, $array2);	// "name" => "PHP", "zend", "joomla"
	$diff		= array_diff_assoc($array2, $array1);	// 0 => "PHP"

	
	echo "<pre>";
	print_r($array1);
	echo "</pre>";
	
	echo "<pre>";
	print_r($array2);
	echo "</pre>";
	
	echo "<pre>";
	print_r($diff);
	echo "</pre>";