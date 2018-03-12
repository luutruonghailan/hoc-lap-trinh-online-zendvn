<?php
	$array	= array("a", "b", "c", "d", "e");
	
	
	echo "Input: ";
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	
	$newArray	= array_splice($array, 2, 1, array(7,8));
	
	echo "Newarray: ";
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";
	
	echo "Ouput: ";
	echo "<pre>";
	print_r($array);
	echo "</pre>";