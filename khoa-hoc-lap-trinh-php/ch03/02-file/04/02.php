<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$fileName	= 'files/abc.txt';
	
	$record		= file($fileName);
	
	$data		= file_get_contents($fileName);
	
	preg_match_all('#\S#imsU', $data, $matches);
	preg_match_all('#\S\s\S#imsU', $data, $spaces);
	
	$chaNoSpace	=	count($matches[0]);

	
	echo '<ul>';
		echo '<li>Tổng số dòng: <b>' . count($record) . '</b></li>';
		echo '<li>Tổng số từ: <b>' . str_word_count($data) . '</b></li>';
		echo '<li>Tổng số khoảng trắng: <b>' . count($spaces[0]) . '</b></li>';
		echo '<li>Tổng số ký tự (no space): <b>' . $chaNoSpace . '</b></li>';
	echo '</ul>';