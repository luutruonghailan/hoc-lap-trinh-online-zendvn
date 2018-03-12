<?php
	$array	= glob('*', GLOB_ONLYDIR);
	
	echo '<pre>';
	print_r($array);
	echo '</pre>';