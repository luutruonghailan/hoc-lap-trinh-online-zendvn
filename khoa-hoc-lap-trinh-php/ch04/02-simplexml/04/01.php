<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	
	
	$xml = simplexml_load_file('../files/continents.xml');
	$book = $xml->book[1];
	
	echo '<pre>';
	print_r($book);
	echo '</pre>';

	
	echo 'Title: ' . $book->title .'<br />';
	echo 'Saleoff: ' . $book->price->saleoff .'<br />';
	echo 'Shipping: ' . $book->shipping->VN .'<br />';
	

	
	
	
	
	
	
	
	