<?php 
	session_start();
	
	$image = 'Koala.jpg';
	
	if(file_exists($image)){
		echo 'File exists';
		$_SESSION['image']['info'] = getimagesize($image);
		$_SESSION['image']['data'] = file_get_contents($image);
	}else{
		echo 'File not exists';
	}
	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';