<?php
	$array = array("yellow", "pink", "blue");
	
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	
	$str	= implode("+", $array);
	
	echo $str;
?>
