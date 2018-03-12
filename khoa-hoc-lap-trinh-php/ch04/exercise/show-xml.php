<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="content">
<?php
	$data = simplexml_load_file('news.xml');
	foreach($data as $value){
?>
		<div class="news">
			<img src="<?php echo $value->image;?>" alt="News" />
			<h3><a href="<?php echo $value->link;?>"><?php echo $value->title;?></a></h3>
			<p><?php echo $value->description;?></p>
			<div class="clr"></div>
		</div>
		
<?php 
	}
?>
		
	</div>
</body>
</html>