
<?php
	$str	= "Php is easy"; 
	
	echo "Input: " . $str . " - length: " . strlen($str);
	
	$str	= rtrim($str, "easy");
	
	echo "<br />";
	
	echo "Output: " . $str . " - length: " . strlen($str);
?>
