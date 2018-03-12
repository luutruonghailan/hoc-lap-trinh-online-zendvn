<?php
	function myError($error_level, $error_message, $error_file, $error_line, $error_context){
		echo '<pre>';
		print_r($error_context);
		echo '</pre>';
		
		$result[] = '<b>Error number: </b>' . $error_level;
		$result[] = '<b>Message: </b>' . $error_message;
		$result[] = '<b>File: </b>' . $error_file;
		$result[] = '<b>Line: </b>' . $error_line;
		
		$result   = implode('<br />', $result);
		die($result);
	}
	
	set_error_handler('myError');
	
	echo ($test);
