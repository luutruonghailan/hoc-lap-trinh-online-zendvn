<?php
	// <weight units="gram">400</weight>
	
	$xml = new DOMDocument('1.0', 'UTF-8');
	
	// Create node
	$book		= $xml->createElement('book');
	$title		= $xml->createElement('title','Lập trình PHP');
	$author		= $xml->createElement('author','ZendVN');
	$pages		= $xml->createElement('pages', 500);
	$weight		= $xml->createElement('weight', 400);
	
	$unitAttri  = $xml->createAttribute('units');
	$unitAttri->value = 'gram';
	$weight->appendChild($unitAttri);
	
	
	// Set relation
	$book->appendChild($title);
	$book->appendChild($author);
	$book->appendChild($pages);
	$book->appendChild($weight);
	$xml->appendChild($book);
	
	
	$xml->formatOutput = true;
	$xml->save('../files/mybooks-03.xml') or die('Error');
