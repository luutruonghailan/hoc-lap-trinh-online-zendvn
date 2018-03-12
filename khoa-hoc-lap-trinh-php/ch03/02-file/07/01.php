<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$source = 'files/abc.txt';
	$dest	= 'result.txt';
	
	if(copy($source, $dest)==true){
		echo 'Success';
	}
	