<?php
	$name	= "PHP";
	$time	= 100;
	
	$array	= compact("name", "time");
	
	echo "<pre>";
	print_r($array);
	echo "</pre>";