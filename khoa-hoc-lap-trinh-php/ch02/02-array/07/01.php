<?php
	$course = array("PHP", "Joomla", "Zend Framework", "jQuery", "php", "Joomla");
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	$newArr	= array_unique($course);
	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";