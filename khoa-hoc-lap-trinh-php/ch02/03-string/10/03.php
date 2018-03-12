
<?php
	$str	= "Php is easy"; 
	
	echo "Input: " . $str . " - length: " . strlen($str);
	
	$str	= ltrim($str, "Php");
	
	echo "<br />";
	
	echo "Output: " . $str . " - length: " . strlen($str);
?>
