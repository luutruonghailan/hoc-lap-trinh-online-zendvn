<?php
	$array = array(
					array('course' => 'Joomla' , 'time' => 80),
					array('course' => 'Zend' , 'time' => 100),
					array('course' => 'jQuery' , 'time' => 120)
				);
	
	session_start();
	
	$_SESSION['array'] = $array;
	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';