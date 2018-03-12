<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	$content	= file_get_contents('http://vnexpress.net/tin-tuc/xa-hoi');
	
	$pattern	= '#<div class="folder-news">(.*)</div>\s*</div>#imsU';
	preg_match_all($pattern, $content, $matches);
	
	$result = array();
	foreach($matches[0] as $key => $value){
		
		// LINK
		$pattern	= '#href="(.*)">.*src="(.*)" .*link-title14" .*>(.*)</a>.*class="h3Lead">(.*)<#imsU';
		preg_match($pattern, $value, $data);
		
		$result[$key]['link']			=	$data[1];
		$result[$key]['image']			=	$data[2];
		$result[$key]['title']			=	trim($data[3]);
		$result[$key]['description']	=	trim($data[4]);
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<style type="text/css">
	* {
		margin: 0px;
		padding: 0px;
	}
	
	.clr {
		clear: both;
	}
	.content{
		margin: 30px auto;
		width: 800px;
	}
	
	div.news{
		margin-bottom: 10px;
		border-bottom: 1px solid #6bb5ef;
		padding-bottom: 10px;
	}
	
	div.news img{
		margin-right: 10px;
		float: left;
	}
	
	div.news h3{
		margin-bottom: 10px;
	}
	
	div.news p{
		text-align: justify;
		line-height: 24px;
	}
	
</style>
</head>
<body>
	<div class="content">
<?php

	foreach($result as $key => $value){
?>
		<div class="news">
			<img src="<?php echo $value['image'];?>" alt="News" />
			<h3><a href="<?php echo $value['link'];?>"><?php echo $value['title'];?></a></h3>
			<p><?php echo $value['description'];?></p>
			<div class="clr"></div>
		</div>
		
<?php 
	}
?>
		
		
	</div>
</body>
</html>