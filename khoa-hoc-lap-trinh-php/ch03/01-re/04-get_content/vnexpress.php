<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$content	= file_get_contents('http://vnexpress.net/tin-tuc/xa-hoi');
	
	$pattern	= '#<div class="folder-news">(.*)</div>\s*</div>#imsU';
	preg_match_all($pattern, $content, $matches);
	
	$result = array();
	foreach($matches[0] as $key => $value){
		
		// LINK
		$pattern	= '#href="(.*)"#imsU';
		preg_match($pattern, $value, $link);
		$result[$key]['link']	= $link[1];
		
		// IMAGES
		$pattern	= '#src="(.*)"#imsU';
		preg_match($pattern, $value, $image);	
		$result[$key]['image']	= $image[1];
		
		// TITLE
		$pattern	= '#<a class="link-title14" .*>(.*)</a>#imsU';
		preg_match($pattern, $value, $title);
		$result[$key]['title']	= trim($title[1]);
		
		// DESCRIPTION
		$pattern	= '#class="h3Lead">(.*)<#imsU';
		preg_match($pattern, $value, $description);
		$result[$key]['description']	= trim($description[1]);
	}
	
	echo "<pre>";
	print_r($result);
	echo "</pre>";