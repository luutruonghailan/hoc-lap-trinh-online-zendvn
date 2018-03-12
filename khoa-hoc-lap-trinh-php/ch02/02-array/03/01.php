<?php
	// Cach 01
	$courses			= array();
 	$courses["php"]		= "PHP";				// index: php (key)
	$courses["zend"]	= "Zend Framework";		// index: zend
	$courses["joomla"]	= "Joomla";				// key: joomla
	$courses[]			= "Item 1";				// key: 0
	$courses[]			= "Item 1";				// key: 1
	
	echo "<pre>";
	print_r($courses);
	echo "</pre>";
	
	echo $courses[6];