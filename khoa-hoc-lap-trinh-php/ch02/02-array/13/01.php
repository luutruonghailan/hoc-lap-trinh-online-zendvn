<?php
	$score= array(2,2,5,1,3,5,7,2);
	
	$newArr	= array_count_values($score);
	
	echo "<pre>";
	print_r($score);
	echo "</pre>";
	
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";