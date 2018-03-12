<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>PHP FILE - Index</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#multy-delete').click(function(){
			$('#main-form').submit();
		});
	});
</script>
</head>
<body>
	<div id="wrapper">
    	<div class="title">PHP FILE - Index</div>
        <div class="list">   
			<form action="multy-delete.php" method="post" name="main-form" id="main-form">
<?php
	require_once 'functions.php';
	
	$data	= scandir('./files');
	
	$i = 0;
	foreach ($data as $key => $value){
		if($value == '.' || $value == '..' || preg_match('#.txt$#imsU',$value) == false) continue;
		$class		= ($i % 2 == 0) ? 'odd' : 'even';
		$content	= file_get_contents("./files/$value");
		$content	= explode('||', $content);
		$tile				= $content[0];
		$description		= $content[1];
		$id			= substr($value, 0, 5);
		$size		= convertSize(filesize("./files/$value"));
?>
	         	<div class="row <?php echo $class;?>">
	            	<p class="no">
	            		<input type="checkbox" name="checkbox[]" value="<?php echo $id;?>">
	            	</p>
	                <p class="name"><?php echo $tile;?><span><?php echo $description;?></span></p>
	                <p class="id"><?php echo $id;?></p>
	                <p class="size"><?php echo $size;?></p>
	                <p class="action">
	                	<a href="edit.php?id=<?php echo $id;?>">Edit</a> |
	                	<a href="delete.php?id=<?php echo $id;?>">Delete</a>
	                </p>
	            </div>
<?php
		$i++;
	} 
?>

	    	</form>
    	</div>
        
	        <div id="area-button">
	        	<a href="add.php">Add File</a>
	        	<a id="multy-delete" href="#">Delete File</a>
	        </div>
    
    </div>
</body>
</html>
