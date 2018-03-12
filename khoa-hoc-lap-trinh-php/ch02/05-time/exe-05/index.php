<?php
	// timePost so sánh timeCurrent 
	$timePost	= '18/06/2013 09:20:23';
	$timeReply	= '29/06/2013 10:20:38';
	
	$datePost	= date_parse_from_format('d/m/Y H:i:s', $timePost);
	$dateReply	= date_parse_from_format('d/m/Y H:i:s', $timeReply);

	$tsPost		= mktime($datePost['hour'], $datePost['minute'], $datePost['second'], $datePost['month'], $datePost['day'], $datePost['year']);
	$tsReply	= mktime($dateReply['hour'], $dateReply['minute'], $dateReply['second'], $dateReply['month'], $dateReply['day'], $dateReply['year']);
	
	$distance 	= $tsReply - $tsPost;
	
	// 23 seconds ago
	// 23 minutues ago
	// 2 hours ago
	// Yesterday at 09:20:23
	// 18/06/2013 at 09:20:23
	
	
	switch ($distance){
		case ($distance < 60): 
			$result = ($distance == 1) ? $distance . ' second ago' : $distance . ' seconds ago';
			break;
		case ($distance >= 60 && $distance < 3600):
			$minute	= round($distance/60);
			$result = ($minute == 1) ? $minute . ' minute ago' : $minute . ' minutes ago';
			break;
		case ($distance >= 3600 && $distance < 86400):
			$hour	= round($distance/3600);
			$result = ($hour == 1) ? $hour . ' hour ago' : $hour . ' hours ago';
			break;
		case (round($distance/86400)==1):
			$result = 'Yesterday at ' . date('H:i:s', $tsReply);
			break;
		default:
			$result = date('d/m/Y \a\t H:i:s', $tsReply);
			break;
	}
	
	echo $result;
?>