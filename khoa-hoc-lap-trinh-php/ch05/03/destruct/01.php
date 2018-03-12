<?php
	session_start();
	require_once 'User.class.php';
	
	$userA = new User();
	echo '<pre>';
	print_r($userA);
	echo '</pre>';

?>
