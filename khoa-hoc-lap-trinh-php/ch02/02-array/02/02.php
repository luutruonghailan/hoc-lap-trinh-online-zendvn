<?php

	// Cach 03
	$course		= array("PHP", "Zend Framework", "Joomla");
	
	if(!empty($course)){
		for($i = 0; $i < count($course); $i++){
			echo $course[$i] . "<br />";
		}
	}
	