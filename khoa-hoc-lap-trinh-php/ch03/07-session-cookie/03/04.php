<?php
	session_start();

	if(isset($_SESSION['age'])){
		echo 'Ton tai';
	}else{
		echo 'Chua Ton tai';
	}

