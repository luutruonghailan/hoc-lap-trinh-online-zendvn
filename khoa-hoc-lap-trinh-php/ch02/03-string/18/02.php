<?php
	$str = "name=Peter&age=23";
	parse_str($str, $arr);
	
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
?>