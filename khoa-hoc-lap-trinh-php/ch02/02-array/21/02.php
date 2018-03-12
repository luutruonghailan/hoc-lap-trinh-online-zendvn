<?php

	
	$result = 'a:3:{s:4:"name";s:3:"PHP";s:4:"time";i:80;i:0;i:100;}';
	
	$array	= unserialize($result);
	
	echo "<pre>";
	print_r($array);
	echo "</pre>";