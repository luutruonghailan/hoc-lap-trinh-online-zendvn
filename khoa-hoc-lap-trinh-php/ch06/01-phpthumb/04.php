<?php
	require_once 'library/ThumbLib.inc.php';
	
	$fileName 	= 'images/baby.jpg';
	$thumb 		= PhpThumbFactory::create($fileName);
	
	//$thumb->cropFromCenter(300);
	//$thumb->cropFromCenter(300, 200);
	//$thumb->crop(0, 0, 400, 250);
	$thumb->crop(200, 100, 400, 250);
	$thumb->show();