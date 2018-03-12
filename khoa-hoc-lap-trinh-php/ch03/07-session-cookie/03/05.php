<?php
	// Kiem tra ton tai: $_SESSION['age']
	// Neu da ton tai -> cap nhat 
	// Neu chua ton tai -> $_SESSION['age'] = 20
	session_start();
	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
	
	if(isset($_SESSION['age'])){
		$_SESSION['age'] = 30;
	}else{
		$_SESSION['age'] = 20;
	}
	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';