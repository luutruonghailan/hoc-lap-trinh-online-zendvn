<?php
	$score= array(2,3,5,1,3,5,7,2);
	
	$sum 		= array_sum($score);
	$length		= count($score);
	$max		= max($score);
	$min		= min($score);
	
	echo "<pre>";
	print_r($score);
	echo "</pre>";
	
	echo "Trung binh: " . $sum/$length . "<br />";
	echo "Tong: " . $sum . "<br />";
	echo "Max: " . $max . "<br />";
	echo "Min: " . $min . "<br />";