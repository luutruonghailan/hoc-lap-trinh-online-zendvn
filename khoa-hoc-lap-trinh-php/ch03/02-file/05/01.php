<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$filename 	= 'files/test.txt';
	$data		= 'DEF';
	
	echo file_put_contents($filename, $data, FILE_APPEND);