<?php

	$variable = 'Nguyen Van A';
	
	function convertString($string){
		$string = str_replace(' ', '_', $string);
		return $string;
	}
	
	echo filter_var($variable, FILTER_CALLBACK, array('options'=>'convertString'));