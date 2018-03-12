<?php
	$value = 'www.zend.vn';	
	
	
	if(!filter_var($value, FILTER_VALIDATE_URL)){
		echo "<br /> $value - khong la url";
	}else{
		echo "<br /> $value - la url";
	}