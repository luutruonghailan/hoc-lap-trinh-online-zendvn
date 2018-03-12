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
			$two0	= 0;
			$one0	= 0;
			$five	= 0;
			$two	= 0;
			$one	= 0;
			
			$result = "";
			if(is_numeric($money) && $money > 1000){

				$flagShow = true;
				while($money >= FIVE_00){ $five00++;	$money = $money - FIVE_00; }
				while($money >= TWO_00)	{ $two00++; 	$money = $money - TWO_00;	}
				while($money >= ONE_00) { $one00++; 	$money = $money - ONE_00;	}
				while($money >= FIVE_0) { $five0++; 	$money = $money - FIVE_0;	}
				while($money >= TWO_0) 	{ $two0++; 		$money = $money - TWO_0;	}
				while($money >= ONE_0) 	{ $one0++;		$money = $money - ONE_0;	}
				while($money >= FIVE) 	{ $five++; 		$money = $money - FIVE;		}
				while($money >= TWO) 	{ $two++; 		$money = $money - TWO;		}
				while($money >= ONE) 	{ $one++; 		$money = $money - ONE;		}
				
				$total = (FIVE_00 * $five00) + (TWO_00 * $two00) + (ONE_00 * $one00) + (FIVE_0 * $five0)
						 + (TWO_0 * $two0)  + (ONE_0 * $one0) + (FIVE * $five) + (TWO * $two) + (ONE * $one);
			}
			
			function showRecord($total, $price ){
				$result = "";
				if($total > 0) {
					$result .= '<div class="normal">
							<p class="col1">Mệnh giá '.number_format($price).'</p>
							<p class="col2">'.$total.'</p>
							<p class="col3">'.number_format($price * $total) .'</p>
						</div>
						<div class="clr"></div>';
				}
				return $result;
			}
	
			$result .= showRecord($five00, FIVE_00);
			$result .= showRecord($two00, TWO_00);
			$result .= showRecord($one00, ONE_00);
			$result .= showRecord($five0, FIVE_0);
			$result .= showRecord($two0, TWO_0);
			$result .= showRecord($one0, ONE_0);
			$result .= showRecord($five, FIVE);
			$result .= showRecord($two, TWO);
			$result .= showRecord($one, ONE);
			$result .= '<p class="total">Tổng tiền: ' . number_format($total) . '</p>';
			
			echo $result;
		?>	
		</div>
    </div>
</body>
</html>
