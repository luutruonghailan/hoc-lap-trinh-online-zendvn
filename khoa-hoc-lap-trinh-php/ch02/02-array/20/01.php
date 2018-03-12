<?php
	$course 	= array("PHP", "Joomla", "Zend", "jQuery");
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	echo "Current: " . current($course) . "<br />";		// PHP
	echo "Next: " . next($course) . "<br />";			// Joomla
	echo "Current: " . current($course) . "<br />";		// Joomla
	echo "Next: " . next($course) . "<br />";			// Zend
	echo "Previous: " . prev($course) . "<br />";		// Joomla
	echo "Reset: " . reset($course) . "<br />";			// PHP
	echo "End: " . end($course) . "<br />";				// jQuery