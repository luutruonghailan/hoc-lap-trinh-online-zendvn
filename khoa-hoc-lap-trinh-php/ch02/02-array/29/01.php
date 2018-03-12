<?php
	$array	= array("a", "b", "c", "d", "e");
	
	$newArr	= array_slice($array, 2);		// c, d , e
	$newArr	= array_slice($array, 2, 2);	// c, d
	$newArr	= array_slice($array, 2, 0);	// null
	
	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";
	
