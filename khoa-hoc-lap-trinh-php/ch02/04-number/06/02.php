<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Hình ảnh ngẫu nhiên</title>
<link rel="stylesheet" type="text/css" href="../style.css">
<script type="text/javascript">
	function refreshPage(){
		window.location.reload();
	}
</script>
</head>
<body>
	<div class="content3">
		<h1>Hình ảnh ngẫu nhiên</h1>
		<div class="image">
			<?php
				$number	= rand(1,4); 
				echo '<img src="images/nature-0'.$number.'.jpg" />';
			?>
			
		</div>
		<a href="javascript:refreshPage();">Random image</a>
	</div>
</body>
</html>