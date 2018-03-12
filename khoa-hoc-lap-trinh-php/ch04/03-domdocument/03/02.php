<?php
	$dom = new DOMDocument();
	$dom->load('../files/mybooks-01.xml');
	
	$bookNode = $dom->getElementsByTagName('book')->item(0);
	$authorNode = $dom->getElementsByTagName('author')->item(0);
	
	$weightNode = $dom->createElement('weight', 100);
	
	$units		= $dom->createAttribute('units');
	$units->value = 'gram';
	$weightNode->appendChild($units);
	
	$bookNode->insertBefore($weightNode, $authorNode);
	
	$dom->formatOutput = true;
	
	$dom->save('02.xml') or die('Error');