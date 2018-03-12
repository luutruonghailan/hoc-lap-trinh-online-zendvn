<?php
	$value = 'zendvnrar ';
	
	$options = array(
					'options' => array('regexp' => '#^[a-zA-Z0-9]+$#')
				);
	
	
	if(!filter_var($value, FILTER_VALIDATE_REGEXP, $options)){
		echo $value . ' khong phai la chu va so';
	}else{
		echo $value . ' la chu va so';
	}