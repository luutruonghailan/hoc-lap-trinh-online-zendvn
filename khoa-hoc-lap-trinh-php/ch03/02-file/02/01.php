<?php
	$filename	= 'files/abc.txt';
	$filename	= 'files';
	
	$type		= filetype($filename);
	
	echo $type;