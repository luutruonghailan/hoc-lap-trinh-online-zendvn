<?php
	$data = file('options.txt') or die("Cannot read file");
	
	array_shift($data);
	
	
	
	$arrOptions = array();
	foreach($data as $key=>$value) {	
		$tmp = explode("|",$value);
		$questionID	= $tmp[0];
		$optionId	= $tmp[1];
		$answer		= $tmp[2];
		$point		= $tmp[3];
		
		$arrOptions[$questionID][$optionId]["option"] 	= $answer;
		$arrOptions[$questionID][$optionId]["point"] 	= $point;
	}