<?php
	$timeStampe = strtotime("now");
	$timeStampe = strtotime("18 June 2013");
	$timeStampe = strtotime("next Monday");
	$timeStampe = strtotime("15-Mar-2013");
	$timeStampe = strtotime("15/06/2013");

	echo date('d/m/Y', $timeStampe);
?>