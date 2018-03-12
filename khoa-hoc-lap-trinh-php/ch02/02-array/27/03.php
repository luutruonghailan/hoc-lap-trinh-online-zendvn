<?php
	$array	= array("name" => "PHP", "time" => 120, "zend", "joomla");
	
	function myFunction($value, $key, $param){
		echo $key . $param . $value . "<br />";
	}
	
	array_walk($array, "myFunction", " - ");
	