<?php
	$date = date_parse_from_format('d/m/Y H:i:s', '15/06/2013 13:20:35') ;
	
	$timeStampe	= mktime($date['hour'], $date['minute'], $date['second'], $date['month'], $date['day'], $date['year']);
	
	echo date('H:i:s d/m/Y', $timeStampe);
?>