<?php
	session_start();	

	$name = $_SESSION['name'];
	
	echo $name;