<?php
	
	session_start();
	$_SESSION['course'] = 'PHP Programming';
	$_SESSION['info'] 	= array(
								'teacher' 	=> 'ZendVN',
								'time'		=> 100
							);
	
	$session = session_encode();
	
	session_unset();
	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	
	session_decode($session);
	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';