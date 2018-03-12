<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
	
	a {
		font-weight: bold;
		color: red;
	}
</style>

<?php
	$content	= file('khoa-hoc.txt') or die('Cannot read file');
	$content 	= implode('', $content);
	
	$pattern		= '#Zend Framework#i';
	$replacement	= '<a href="http://www.zend.vn">Zend Framework</a>';
	
	$result 	= preg_replace($pattern, $replacement, $content);	
	echo $result;