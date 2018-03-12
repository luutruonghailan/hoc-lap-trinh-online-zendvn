<?php
	$course 	= array("php" => "PHP", "jl" => "Joomla", "zend" => "Zend Framework");
	
	$keyArray	= array_rand($course, 2);
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	echo "<pre>";
	print_r($keyArray);
	echo "</pre>";