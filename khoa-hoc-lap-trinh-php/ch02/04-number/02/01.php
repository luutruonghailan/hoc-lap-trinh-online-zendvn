<?php
	$number = "02";
	$number = -1.23;
	$number = "12s";
	
	if(is_numeric($number)){
		echo "Number";
	}else {
		echo "Not Number";
	}