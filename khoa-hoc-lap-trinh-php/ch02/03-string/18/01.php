<?php
	$str = "name=Peter&age=23";
	parse_str($str);
	echo $name . "<br />";
	echo $age . "<br />";
	
?>