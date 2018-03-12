<?php
	$courses	= array();
 	$courses[]	= "PHP";
// 	$courses[]	= "Zend Framework";
// 	$courses[]	= "Joomla";
	
	$length		= count($courses);
	echo $length;
	
	// C1: length
	
// 	if($length > 0) {
// 		echo "Khong la mang rong";
// 	}else{
// 		echo "Mang rong";
// 	}
	
	// C2: empty
	if(!empty($courses)) {
		echo "Khong la mang rong";
	}else{
		echo "Mang rong";
	}