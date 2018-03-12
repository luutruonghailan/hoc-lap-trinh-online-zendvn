<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	
	
	$xml = simplexml_load_file('../files/01.xml');
	
	echo gettype($xml) . '<br />';
	
	echo $strXml = $xml->asXML();
	echo gettype($strXml);


	
	
	
	
	
	
	
	