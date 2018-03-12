<?php
	
	// Hiển thi tất cả các THƯ MỤC có tên kết thúc bằng es
	$data	= scandir('.');
	
	$result = array();
	foreach ($data as $key => $value) {
		if(is_dir($value)){
			if(preg_match('#es$#imsU', $value)){
				$result[] = $value;
			}
		}
	}
	
	echo '<pre>';
	print_r($result);
	echo '</pre>';