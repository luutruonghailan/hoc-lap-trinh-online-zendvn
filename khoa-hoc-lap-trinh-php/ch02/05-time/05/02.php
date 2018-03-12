<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thao tac voi ngay thang</title>
<link rel="stylesheet" media="screen" href="style.css">
</head>
<body>
<?php
	$arrDays	= range(1,31);	// 0 => 1, 1=>2 
	$arrMonths	= range(1, 12);
	$arrYears	= range(1970, 2015);
	
	function createSelectbox($arrData, $name, $keySelected){
		$strDays = "";
		if(!empty($arrData)) {
			$strDays = '<select name="'.$name.'">';
			for($i = 0; $i < count($arrData); $i++){
				if($keySelected == $i){
					$strDays .= '<option value="'.$i.'" selected="true">'.$arrData[$i].'</option>';
				}else{
					$strDays .= '<option value="'.$i.'">'.$arrData[$i].'</option>';
				}
				
			}
			$strDays .= '</select>';
		}
		return $strDays;
	}
	
	$days	=	(isset($_POST['days-select'])) ? $_POST['days-select'] : 0;
	$months	=	(isset($_POST['months-select'])) ? $_POST['months-select'] : 0;
	$years	=	(isset($_POST['years-select'])) ? $_POST['years-select'] : 0;
	
	$strDays 	= createSelectbox($arrDays, "days-select", $days);
	$strMonths 	= createSelectbox($arrMonths, "months-select", $months);
	$strYears 	= createSelectbox($arrYears, "years-select", $years);
?>
	<div class="content">
		<h1>Thao tác với thời gian</h1>
		<form action="#" method="post" id="mainForm" name="mainForm">
			<div class="row">
				<span>Ngày</span>
				<?php echo $strDays; ?>
			</div>
			<div class="row">
				<span>Tháng</span>
				<?php echo $strMonths; ?>
			</div>
			<div class="row">
				<span>Năm</span>
				<?php echo $strYears; ?>
			</div>
			<div class="row">
				<input type="submit" value="Check date"/>
			</div>
			<div class="result">
				<?php
					echo "Ngày được chọn: $arrDays[$days]/$arrMonths[$months]/$arrYears[$years]"; 
					if(checkdate($arrMonths[$months], $arrDays[$days], $arrYears[$years])){
						echo "<p>Ngày hợp lệ</p>";
					}else{
						echo "<p>Ngày không hợp lệ</p>";
					}
				?>
			</div>
		</form>
	</div>
</body>
</html>