<?php
	$dir	= opendir('..');
	
	while(($file = readdir($dir)) != false) {
		echo 'filename: ' . $file . '<br />';
	}
	
	closedir($dir);