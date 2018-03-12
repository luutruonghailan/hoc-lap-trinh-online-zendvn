<?php
	session_start();

	if(isset($_SESSION['userA'])){
		$userA = unserialize($_SESSION['userA']);
		echo '<pre>';
		print_r($userA);
		echo '</pre>';
	}
?>
