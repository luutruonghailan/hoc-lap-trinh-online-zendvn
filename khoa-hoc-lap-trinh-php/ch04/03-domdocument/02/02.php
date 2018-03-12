<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<?php
	$dom = new DOMDocument();
	
	$dom->load('../files/01.xml');
	
	$books = $dom->getElementsByTagName('book');
	
	$bookPHP 	= $books->item(0);
	
	$currentNode 	= $bookPHP->tagName;
	$parentNode 	= $bookPHP->parentNode->tagName;
	
	$titleNode 		= $bookPHP->getElementsByTagName('title')->item(0)->nodeValue;
	
	foreach($bookPHP->attributes as $attr){
		echo 'Name: ' . $attr->name . ' - Value:' . $attr->value.'<br />';
	}
	
	echo '<pre>';
	print_r($bookPHP);
	echo '</pre>';