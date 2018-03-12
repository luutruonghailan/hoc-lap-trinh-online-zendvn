<?php
	$str	= "<b>PHP</b> is easy";
	
	echo "Input: " . $str . "<br />";
	echo "Output: " .  htmlspecialchars_decode($str);

