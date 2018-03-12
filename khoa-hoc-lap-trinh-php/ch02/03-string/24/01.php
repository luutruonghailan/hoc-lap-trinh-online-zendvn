<?php
	$str	= "This is a test";
	
	$index	= substr_count($str, "is");
	$index	= substr_count($str, "is", 3);	// s is a test

	
	echo $index;

