<?php
	$course 	= array("php" => "PHP", "jl" => "Joomla", "zend" => "Zend Framework");
	
	echo $key1 = array_search("Joomla", $course);	// php
	echo $key2 = array_search("joomla", $course);	// php