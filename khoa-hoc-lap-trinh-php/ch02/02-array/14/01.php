<?php
	$array1 	= array("a", "b", "c");
	$array2 	= array(2, 4, 6);
	$array3 	= array("php" => "PHP", "jl" => "Joomla");
	
	$newArray	= array_merge($array1, $array2, $array3);
	
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";