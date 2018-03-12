<?php
	// Kiem tra ton tai: $_SESSION['age']
	// Neu da ton tai -> cap nhat 
	// Neu chua ton tai -> $_SESSION['age'] = 20
	session_start();
	
	session_destroy();
	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';