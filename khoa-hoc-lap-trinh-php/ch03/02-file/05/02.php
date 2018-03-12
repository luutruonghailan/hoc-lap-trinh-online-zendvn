<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$filename 	= 'files/test.txt';
	
	if(file_exists($filename)){
		$data = file($filename);
		unset($data[2]);
		
		file_put_contents($filename, $data);
	}else{
		echo 'Tap tin khong ton tai';
	}