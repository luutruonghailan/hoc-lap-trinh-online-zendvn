<?php
	require_once 'library/ThumbLib.inc.php';
	
	$fileName 	= 'images/baby.jpg';
	$thumb 		= PhpThumbFactory::create($fileName);
	

	//$thumb->rotateImage('CVV');
	$thumb->rotateImageNDegrees(130);
	$thumb->show();