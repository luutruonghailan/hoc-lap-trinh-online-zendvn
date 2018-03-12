<?php
	require_once 'fractions.php';	


	$fractions1	= "52/6"; 
	$fractions2	= "34/8"; 
	
	echo "<hr /> Input: <br />";
	echo "Phan so 01: " . $fractions1 . "<br />";
	echo "Phan so 02: " . $fractions2 . "<br />";
	
	$fractions1 = optimizeFraction($fractions1);
	$fractions2 = optimizeFraction($fractions2);

	
	echo "<hr /> Toi gian: <br />";
	echo "Phan so 01: " . implode("/", $fractions1) . "<br />";
	echo "Phan so 02: " . implode("/", $fractions2) . "<br />";
	
	$result[0]	= $fractions1[0] * $fractions2[0];
	$result[1]	= $fractions1[1] * $fractions2[1];
	
	
	echo "Tich: " . implode("/", $result) . "<br />";
	
	$result	= implode("/",$result);
	$result	= optimizeFraction($result);
	echo "Tich: " . implode("/", $result) . "<br />";
