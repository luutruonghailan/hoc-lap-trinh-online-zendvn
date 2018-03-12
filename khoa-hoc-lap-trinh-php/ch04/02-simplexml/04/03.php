<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	
	
	$xml = simplexml_load_file('../files/01.xml');


	foreach($xml as $value){
		echo 'Title: ' . $value->title . '<br />';
		echo 'Author: ' . $value->author . '<br />';
		echo 'Page: ' . $value->pages . '<br />';
		echo 'Weight: ' . $value->weight . ' ' . $value->weight->attributes() .'<br />';
		
		echo '<hr />';
	}

	
	
	
	
	
	
	
	