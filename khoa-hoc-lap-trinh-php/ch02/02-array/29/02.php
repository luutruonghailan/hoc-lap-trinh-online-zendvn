<?php
	$array	= array("a", "b", "c", "d", "e");
	
	$newArr	= array_slice($array, 2, 2, false);	// c, d
	$newArr	= array_slice($array, 2, 2, true);	// c (2), d (3)

	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";
	
