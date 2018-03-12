<?php
	$course = array("PHP", "Joomla", "Zend Framework");
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	echo $length = array_unshift($course, "HTML", "CSS");
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";