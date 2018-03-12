<?php
	$course = array("name" => "PHP", "time" => 200);
	
	echo "<pre>";
	print_r($course);
	echo "</pre>";
	
	
	$newArr	= array_values($course);
	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";