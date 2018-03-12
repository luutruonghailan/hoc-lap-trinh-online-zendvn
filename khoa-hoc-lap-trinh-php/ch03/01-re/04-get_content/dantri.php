<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$content	= file_get_contents('http://dantri.com.vn/the-thao.htm');
	
	// LIST
	$pattern	= '#class="mt3 clearfix">.*src="(.*)".*class="fon6".*>(.*)<.*fon5 wid324 fl">(.*)<#imsU';
	preg_match_all($pattern, $content, $dataList);

	$result		= array();
	
	foreach($dataList[1] as $key => $value){
		$result[$key]['image']			= $dataList[1][$key];
		$result[$key]['title']			= $dataList[2][$key];
		$result[$key]['description']	= $dataList[3][$key];
	}
	
	// TOP
	$pattern	= '#id="ctl00_IDContent_List1_noibatmuc".*src="(.*)".*class="fon44".*>(.*)<.*class="fon5 wid255 fl">(.*)<#imsU';
	preg_match($pattern, $content, $dataTop);

	$top['image']		= $dataTop[1];
	$top['title']		= $dataTop[2];
	$top['description']	= $dataTop[3];
	
	array_unshift($result, $top);
	
	echo "<pre>";
	print_r($result);
	echo "</pre>";
	