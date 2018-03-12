<?php
	require_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect();
	
	echo $device = ($detect->isMobile()) ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer';
	
	if($device == 'tablet') {
		// Load template for tablet
	}else if ($device == 'phone') {
		// Load template for phone
	}else{
		// Load template for computer
	}
	
	if( $detect->isiOS() ){
		echo 'isiOS';
	}
	
	if( $detect->isAndroidOS() ){
		echo 'isAndroidOS';
	}