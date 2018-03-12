<?php
	// Cach 01
	$courses = array("php" => "PHP", "zend" => "Zend Framework", "joomla" => "Joomla", 0 => "Item 1", 1 => "Item 1");

	echo "<pre>";
	print_r($courses);
	echo "</pre>";
	
	/*
	 * Array
		(
		    [php] => PHP
		    [zend] => Zend Framework
		    [joomla] => Joomla
		    [0] => Item 1
		    [1] => Item 1
		)
	 */
	
	if(!empty($courses)){
		foreach ($courses as $key => $value){
			echo $key . " : " . $value . "<br />";
		}
	}