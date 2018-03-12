<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mô phỏng Máy ATM</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content5">
		<?php
			$money = 0;
			if(isset($_POST["money"])) $money = $_POST["money"];
		?>
		<div class="info">
			<img src="images/atm.jpg" />
			<h1>Mô phỏng Máy ATM</h1>
			<form action="#" method="post">
				<p>Vui lòng nhập vào số tiền mà quý khách muốn thực hiện giao dịch</p>
				<input type="text" name="money" value="<?php echo number_format($money);?>" />
				<input type="submit" value="Rút tiền" />

			</form>
		</div>
		<div class="clr"></div>
		<div class="result">
			<div class="normal">
				<p class="col1">Mệnh giá</p>
				<p class="col2">Số lượng</p>
				<p class="col3">Thành tiền</p>
			</div>
			<div class="clr"></div>
		<?php
			define("ONE", 1000);
			define("TWO", 2000);
			define("FIVE", 5000);
			define("ONE_0", 10000);
			define("TWO_0", 20000);
			define("FIVE_0", 50000);
			define("ONE_00", 100000);
			define("TWO_00", 200000);
			define("FIVE_00", 500000);
			
			$five00	= 0;
			$two00	= 0;
			$one00	= 0;
			$five0	= 0;
			
			$flagShow = false;
			if(is_numeric($money) && $money > 1000){

				$flagShow = true;
				while($money >= FIVE_00){ 
					$five00++; 
					$money = $money - FIVE_00; 
				}
				
				while($money >= TWO_00)	{ 
					$two00+=1; 
					$money = $money - TWO_00;	
				}
				
				while($money >= ONE_00) { 
					$one00+=1; 
					$money = $money - ONE_00;	
				}
				
				while($money >= FIVE_0) { 
					$five0+=1; 
					$money = $money - FIVE_0;	
				}

				if($five00 > 0) {
					echo '<div class="normal">
							<p class="col1">'.number_format(FIVE_00).'</p>
							<p class="col2">'.$five00.'</p>
							<p class="col3">'.number_format(FIVE_00 * $five00) .'</p>
						</div>
						<div class="clr"></div>';
				}
				
				if($two00 > 0) {
					echo '<div class="normal">
							<p class="col1">'.number_format(TWO_00).'</p>
							<p class="col2">'.$two00.'</p>
							<p class="col3">'.number_format(TWO_00 * $two00) .'</p>
						</div>
						<div class="clr"></div>';
				}
				
				if($one00 > 0) {
					echo '<div class="normal">
							<p class="col1">'.number_format(ONE_00).'</p>
							<p class="col2">'.$one00.'</p>
							<p class="col3">'.number_format(ONE_00 * $two00) .'</p>
						</div>
						<div class="clr"></div>';
				}
				
				if($five0 > 0) {
					echo '<div class="normal">
							<p class="col1">'.number_format(FIVE_0).'</p>
							<p class="col2">'.$five0.'</p>
							<p class="col3">'.number_format(FIVE_0 * $five0) .'</p>
						</div>
						<div class="clr"></div>';
				}
				
				$total = FIVE_00 * $five00 + TWO_00 * $two00 + ONE_00 * $one00 + FIVE_0 * $five0;
			}
			
		?>	
		<?php
			if($flagShow==true) echo '<p class="total">Tổng tiền: ' . number_format($total). '</p>'; 
		?>
		</div>
    </div>
</body>
</html>

<?php 
	function createBox($content = "Box C", $width, $height){
		$result  = '<div style="width:' . $width . 'px;height:'. $height. 'px;">';
		$result .= '<p>'.$content.' <span>('.$width.' x '.$height.')</span></p>';
		$result .= '</div>';
		return $result;
	}
?>

