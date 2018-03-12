<?php
	$value = '127';	
	
	
	if(!filter_var($value, FILTER_VALIDATE_IP)){
		echo "<br /> $value - khong la ip";
	}else{
		echo "<br /> $value - la ip";
	}