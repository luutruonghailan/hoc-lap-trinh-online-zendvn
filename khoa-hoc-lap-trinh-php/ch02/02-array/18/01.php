<?php
	$course 	= array("pHp" => "PHP", "jl" => "Joomla", "zend" => "Zend Framework");
	
	$newArr		= array_change_key_case($course, CASE_LOWER);
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";