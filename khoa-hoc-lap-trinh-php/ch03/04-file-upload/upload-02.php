<?php
	require_once 'functions.php';
	$configs	= parse_ini_file('config.ini');

	$fileUpload = $_FILES['file-upload'];
	
	$fileName 	= randomString($fileUpload['name'], 7);
	
	$flagSize 		= checkSize($fileUpload['size'], $configs['min_size'], $configs['max_size']);
	$flagExtension 	= checkExtension($fileUpload['name'], explode('|', $configs['extension']));
	
	if($flagSize == true && $flagExtension==true){
		@move_uploaded_file($fileUpload['tmp_name'], './files/' . $fileName);
	}