<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$content	= file_get_contents('http://www.vietcombank.com.vn/');
	
	// Get table
	$pattern	= '#(?<=ctl00_Content_HomeSideBar_RatesBox_ExchangeRates_ExrateView">).*(?=</table)#imsU';
	preg_match($pattern, $content, $matches);
	
	// Create array
	$pattern	= '#class="code">(.*)</td><td>(.*)</td><td>(.*)</td><td>(.*)</td.*/tr>#imsU';
	preg_match_all($pattern, $matches[0], $matches);
	
	foreach ($matches[1] as $key => $value){
		$result[$value][]	= $matches[2][$key];
		$result[$value][]	= $matches[3][$key];
		$result[$value][]	= $matches[4][$key];
	}
	
	echo "<pre>";
	print_r($result);
	echo "</pre>";