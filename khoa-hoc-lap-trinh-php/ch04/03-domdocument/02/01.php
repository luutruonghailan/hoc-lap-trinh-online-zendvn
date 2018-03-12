<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<?php
	$dom = new DOMDocument();
	
	$dom->load('../files/01.xml');
	
	$books = $dom->getElementsByTagName('book');
	
	$bookPHP 	= $books->item(0);
	$bookJoomla = $books->item(1);
	$bookZend 	= $books->item(2);
	
	echo '<pre>';
	print_r($bookZend);
	echo '</pre>';