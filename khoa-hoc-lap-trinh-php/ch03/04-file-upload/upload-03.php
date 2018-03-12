<?php
	require_once 'functions.php';
	$configs	= parse_ini_file('config.ini');

	$fileUpload = $_FILES['file-upload'];
	
	foreach($fileUpload['name'] as $key => $value){
		if($value != null){
			$fileName 		= randomString($value, 7);
			$flagSize 		= checkSize($fileUpload['size'][$key], $configs['min_size'], $configs['max_size']);
			$flagExtension 	= checkExtension($value, explode('|', $configs['extension']));
			if($flagSize == true && $flagExtension==true){
				@move_uploaded_file($fileUpload['tmp_name'][$key], './files/' . $fileName);
			}
		}
		
	}
	
	
	
	
	
	
	