<?php
	
	// Hiển thi tất cả các THƯ MỤC có tên kết thúc bằng es
	$data	= glob('*es', GLOB_ONLYDIR);
	
	echo '<pre>';
	print_r($data);
	echo '</pre>';