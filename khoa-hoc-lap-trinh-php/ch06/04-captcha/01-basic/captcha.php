<?php
	session_start();
	header('Content-type: image/jpeg');
	$captcha	= imagecreate(100, 50);
	
	imagecolorallocate($captcha, 42, 194, 42);
	
	$content	= substr(md5(time()*20-1345),0,5);
	$text		= imagettftext($captcha, 18, 5, 20, 30, imagecolorallocate($captcha, 15, 24, 15), 'vnavan.ttf', $content);
	$_SESSION['code'] = $content;
	imagejpeg($captcha);
	
	imagedestroy($captcha);