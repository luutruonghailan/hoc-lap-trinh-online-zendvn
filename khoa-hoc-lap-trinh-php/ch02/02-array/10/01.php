<?php
	$course = array("PHP", "Joomla", "Zend Framework");
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	$newArr = array_reverse($course);
	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";