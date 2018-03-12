<?php
	$subject	= 'PHP PHP is easy';
	$pattern	= '/PHP/';
	
	if(preg_match($pattern, $subject, $match)==true){
		echo 'Tim thay';
	}else {
		echo 'Khong Tim thay';
	}
	
	echo "<pre>";
	print_r($match);
	echo "</pre>";