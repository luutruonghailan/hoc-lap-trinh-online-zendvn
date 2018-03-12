<?php
	
	
	$path	=	'abc';
	$path	=	'abc/def';
	if(file_exists($path)==false){
		mkdir($path);
	}