<?php
	// 1 + 2 + 3 + ... + namespace 
	// sum(1) = 1
	// sum(2) = 1 + 2 = sum(1) + 2
	// sum(3) = 1 + 2 + 3 = sum(2) + 3
	// sum(n) = sum(n-1) + n
	
	function sum($number){
		$result = 0;
		if($number >= 1) {
			$result = sum($number - 1) + $number;
		}
		
		return $result;
	}
	
	echo sum(4);