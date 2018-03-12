<?php
	$path	= 'images';
	
	$data	= scandir($path);
	
	echo '<pre>';
	print_r($data);
	echo '</pre>';