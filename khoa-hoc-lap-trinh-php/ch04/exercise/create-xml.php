<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$content	= file_get_contents('http://vnexpress.net/tin-tuc/xa-hoi');
	
	$pattern	= '#<div class="folder-news">(.*)</div>\s*</div>#imsU';
	preg_match_all($pattern, $content, $matches);
	
	$strXML  = '<?xml version="1.0" encoding="UTF-8"?>';
	$strXML .= '<news>';
	foreach($matches[0] as $key => $value){

		$pattern	= '#href="(.*)">.*src="(.*)" .*link-title14" .*>(.*)<.*class="h3Lead">(.*)<#imsU';
		preg_match($pattern, $value, $data);
		
		if($data[1] != null){
			$strXML .= '<article>
							<link>'.$data[1].'</link>
							<image>'.$data[2].'</image>
							<title>'.trim($data[3]).'</title>
							<description>'.trim($data[4]).'</description>
						</article>';
		}
		
	}
	$strXML .= '</news>';
	
	file_put_contents('news.xml', $strXML) or die('Error');

?>