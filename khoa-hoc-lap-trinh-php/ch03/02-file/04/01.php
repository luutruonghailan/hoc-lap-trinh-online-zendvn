<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$fileName	= 'files/abc.txt';
	
	$record		= file($fileName);
	
	$data		= file_get_contents($fileName);
	
	$space		= substr_count($data, ' ');
	
	echo '<ul>';
		echo '<li>Tổng số dòng: <b>' . count($record) . '</b></li>';
		echo '<li>Tổng số từ: <b>' . str_word_count($data) . '</b></li>';
		echo '<li>Tổng số khoảng trắng: <b>' . $space . '</b></li>';
		echo '<li>Tổng số ký tự: <b>' . strlen($data) . '</b></li>';
	echo '</ul>';