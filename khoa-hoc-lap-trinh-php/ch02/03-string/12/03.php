
<?php
	$str	= "        Php        is      easy             "; 
	
	// Khoang trang thua o ben trai va ben phai
	$str 	= trim($str);
	
	// Khoang trang du thua giua cac tu
	// Php is easy
	
	$array 	= explode(" ", $str);
	
	
	foreach($array as $key => $value){
		if(trim($value) == null) unset($array[$key]);
	}
	
	$str = implode(" ", $array);
	
	echo $str . ' length: ' . strlen($str);
	
?>
