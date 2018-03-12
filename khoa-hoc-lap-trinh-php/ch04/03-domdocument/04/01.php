<?php
	$dom = new DOMDocument();
	$dom->load('../files/01.xml');
	
	$xpath = new DOMXPath($dom);
	
	// Lấy những quyển sách có thuộc tính id
	$query = '//book[@id]';
	
	// Lấy những quyển sách có  id = 11
	$query = '//book[@id=22]';
	
	$result = $xpath->query($query);
	
	echo '<pre>';
	print_r($result->item(0));
	echo '</pre>';

	