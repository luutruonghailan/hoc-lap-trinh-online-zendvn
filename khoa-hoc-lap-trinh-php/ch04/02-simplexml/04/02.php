<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	
	
	$xml = simplexml_load_file('../files/01.xml');
	$book = $xml->book[1];
	
	echo '<pre>';
	print_r($book);
	echo '</pre>';

	
	$atrs = $book->attributes();
	echo $atrs->tag;
	echo '<pre>';
	print_r($atrs);
	echo '</pre>';
	

	
	
	
	
	
	
	
	