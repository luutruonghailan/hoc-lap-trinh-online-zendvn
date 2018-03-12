<?php
	$array	= array("f" => "PHP", "d" => 80, "g" =>100);
	
	echo "Input: ";
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	
	krsort($array);
	
	echo "Output: ";
	echo "<pre>";
	print_r($array);
	echo "</pre>";