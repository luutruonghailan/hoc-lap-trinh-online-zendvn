<?php
	$data	= file_get_contents('data.txt');
	
	foreach($data as $key => $value){
		echo $value['name'] . '<br />';
	}