<?php
	$value = 23;	
	
	$int_options = array("options"=>array("min_range"=>5,"max_range"=>25));
	
	if(!filter_var($value, FILTER_VALIDATE_INT, $int_options)){
		echo "<br /> $value - khong la int";
	}else{
		echo "<br /> $value - la int";
	}