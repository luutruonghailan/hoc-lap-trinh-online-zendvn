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
		    $( "#date-start" ).datepicker({
		    	dateFormat: "dd/mm/yy",
		    	defaultDate: "+3d",
		    	changeYear: true,
		    	changeMonth: true,
		    	yearRange: "2000:2015"
		    });
		    $( "#date-end" ).datepicker({
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
		<h1>Exercise 06</h1>
		<?php
			$dateStart = (isset ( $_POST ["date-start"] )) ? $_POST ["date-start"] : "";
			$dateEnd 	= (isset ( $_POST ["date-end"] )) ? $_POST ["date-end"] : "";
		?>
	
		<form action="#" method="post" name="mainForm" id="mainForm">
			<div class="row">
				<span>Start: </span>
				<input readonly="readonly" type="text" id="date-start" name="date-start" value="<?php echo $dateStart;?>" />
			</div>
			<div class="row">
				<span>End: </span>
				<input readonly="readonly" type="text" id="date-end" name="date-end" value="<?php echo $dateEnd;?>" />
			</div>
			<div class="row">
				<input type="submit" value="Submit" />
			</div>
		</form>
		<div class="result">
		<?php 
			
			
			function compareTwoDay($dateStart, $dateEnd ){
				// Start
				$arrDateStart 	= date_parse_from_format('d/m/Y', $dateStart) ;
				$tsStart		= mktime(0, 0, 0, $arrDateStart['month'], $arrDateStart['day'], $arrDateStart['year']);
					
				// End
				$arrDateEnd = date_parse_from_format('d/m/Y', $dateEnd) ;
				$tsEnd		= mktime(0, 0, 0, $arrDateEnd['month'], $arrDateEnd['day'], $arrDateEnd['year']);
				
				// 0, 1, -1
				$result = 0;
				if($tsEnd > $tsStart) {
					$result = 1;
				}else if ($tsEnd < $tsStart){
					$result = -1;
				}
				return $result;
			}
			
			if(compareTwoDay($dateStart, $dateEnd)==1){
				echo "End > Start";
			}else if(compareTwoDay($dateStart, $dateEnd)==-1){
				echo "Start > End";
			}else {
				echo "End = Start";
			}
		?>
		</div>
	</div>
</body>
</html>