<?php
	require_once 'fractions.php';	


	$fractions	= "52/6"; // 26/3
			
	$result = optimizeFraction($fractions);
	echo $result	= implode("/", $result);
