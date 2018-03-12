<?php
	
	ini_set('display_errors', 'off');
	
	ini_set('log_errors', 'on');
	ini_set('error_log','php-error.log');
	
	foreach($array as $key => $value){
		$html .= $value;
		
	}