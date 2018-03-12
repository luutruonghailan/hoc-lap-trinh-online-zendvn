<?php
	$book = array(
					'id' 		=> 11,
					'author'	=> 'ZendVN',
					'title'		=> 'Lập trình PHP',
					'pages'		=> 500
			);

	$xml = new DOMDocument('1.0', 'UTF-8');
	
	$root = $xml->createElement('book');
	$xml->appendChild($root);
	
	foreach($book as $key => $value){
		$node = $xml->createElement($key, $value);
		$root->appendChild($node);
	}
	
	$xml->formatOutput = true;
	$xml->save('../files/mybooks-05.xml') or die('Error');
