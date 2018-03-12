<?php
	$str = "http://www.zend.vn:80/lap-trinh/ky-thuat-xu-ly-mang.php?id=79&page=2#item1";
	
	$data = parse_url($str);
	
	echo "<pre>";
	print_r($data);
	echo "</pre>";
	
	
?>