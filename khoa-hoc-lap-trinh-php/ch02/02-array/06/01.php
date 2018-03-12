<?php
	$course = array("PHP", "Joomla", "Zend Framework", "jQuery");
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	echo $lastItem	= array_pop($course);
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";