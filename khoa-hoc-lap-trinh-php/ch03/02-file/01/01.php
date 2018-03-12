<?php
	//$filename	= 'file';
	$filename	= 'files/abc.tx';
	if(file_exists($filename)){
		echo 'Ton tai';
	}else {
		echo 'Khong ton tai';
	}