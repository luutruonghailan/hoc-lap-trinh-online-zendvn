<?php

// UCLN
function UCLN($n1, $n2){
	for($i = 1; $i <= $n1; $i++) if($n1 % $i ==0) $uclnN1[] = $i;
	for($i = 1; $i <= $n2; $i++) if($n2 % $i ==0) $uclnN2[] = $i;

	$temp	= array_intersect($uclnN1, $uclnN2);
	$result = max($temp);
	return $result;
}

// Rut gon phan so
function optimizeFraction($fractions){
	// 01 - Lay phan so
	$arrFraction	= explode("/", $fractions);

	// 02 - UCLN
	$ucln = UCLN($arrFraction[0], $arrFraction[1]);

	// 03 - Chia tu so va mau so cho UCLN
	$arrFraction[0]		/= $ucln;
	$arrFraction[1]		/= $ucln;

	return $arrFraction;
}