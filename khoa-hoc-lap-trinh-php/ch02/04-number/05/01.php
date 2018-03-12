<?php
	$arrNumber = array(1,-3, 8.5, 8.51, 4, 9);
	
	sort($arrNumber);
	
	$sum = 0;
	foreach($arrNumber as $value){
		$sum += $value;
	}
	
	$min	=	$arrNumber[0];
	$max	= 	$arrNumber[count($arrNumber)-1];
	
	echo "Min: " . $min . "<br />";
	echo "Max: " . $max . "<br />";
	echo "Sum: " . $sum . "<br />";