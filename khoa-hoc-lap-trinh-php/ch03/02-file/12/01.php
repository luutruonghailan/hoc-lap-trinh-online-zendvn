<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$data	= parse_ini_file('test.ini', TRUE);
	
	echo '<pre>';
	print_r($data);
	echo '</pre>';