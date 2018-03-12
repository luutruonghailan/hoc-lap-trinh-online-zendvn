<?php
	$key	= array("name","time","total");
	$value	= array("PHP",100,2000);
	
	$newArr	= array_combine($key, $value);
	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";