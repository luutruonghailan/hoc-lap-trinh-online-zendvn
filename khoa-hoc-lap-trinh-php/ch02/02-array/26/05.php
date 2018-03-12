<?php
	$array1		= array("name" => "PHP", "time" => 120, "zend", "joomla");	// name, time, 0, 1
	$array2		= array("PHP",100);											// 0, 1
	
	$diff		= array_intersect_key($array1, $array2);		// 0 => zend, 1 => joomla
	$diff		= array_intersect_key($array2, $array1);		// 0 => PHP, 1 => 100
	
	echo "<pre>";
	print_r($array1);
	echo "</pre>";
	
	echo "<pre>";
	print_r($array2);
	echo "</pre>";
	
	echo "<pre>";
	print_r($diff);
	echo "</pre>";