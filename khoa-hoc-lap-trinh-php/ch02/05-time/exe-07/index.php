<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>jQuery UI Datepicker - Default functionality</title>
	<link rel="stylesheet" href="../css/jquery-ui.css" />
	<link rel="stylesheet" href="../css/style.css" />
	<script src="../js/jquery-1.9.1.js"></script>
	<script src="../js/jquery-ui.js"></script>
	<script type="text/javascript">
		$(function() {
		    $( "#date" ).datepicker({
		    	dateFormat: "dd/mm/yy",
		    	defaultDate: "+3d",
		    	changeYear: true,
		    	changeMonth: true,
		    	yearRange: "2000:2015"
		    });
		  
		});
	  </script>
</head>
<body>
	<div class="content">
		<h1>Exercise 07</h1>
		<?php
			require_once 'function.php';
			$arrType = array('-- Select type --','Day', 'Month', 'Year');
			
			
			// Lay gia tri nguoi dung nhap vao
			$date 	= (isset ( $_POST ["date"] )) ? $_POST ["date"] : "";
			$type 	= (isset ( $_POST ["select-type"] )) ? $_POST ["select-type"] : "";
			$value 	= (isset ( $_POST ["value"] )) ? $_POST ["value"] : "";
			
			$strTypes	= createSelectbox($arrType, 'select-type', $type);
			
			
		?>
		<form action="#" method="post" name="mainForm" id="mainForm">
			<div class="row">
				<span>Date: </span>
				<input readonly="readonly" type="text" id="date" name="date" value="<?php echo $date;?>" />
			</div>
			<div class="row">
				<span>Type</span>
				<?php echo $strTypes;?>
			</div>
			<div class="row">
				<span>Value</span>
				<input type="text" id="value" name="value" value="<?php echo $value;?>" />
			</div>
			<div class="row">
				<input type="submit" value="Submit" />
			</div>
		</form>
		<div class="result">
		<?php 
			echo $result = addTime($date, 'd/m/Y', $arrType[$type], $value);
		?>
		</div>
	</div>
</body>
</html>