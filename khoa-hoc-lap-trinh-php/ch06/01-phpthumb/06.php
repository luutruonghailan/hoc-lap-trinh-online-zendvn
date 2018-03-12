<?php
	require_once 'library/ThumbLib.inc.php';
	
	$fileName 	= 'images/baby.jpg';
	$thumb 		= PhpThumbFactory::create($fileName);
	

	$thumb->resize(110, 110);
	$thumb->save('img110/baby110.png');
	
	$thumb->show();