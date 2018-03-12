<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Bạn thuộc chòm sao gì?</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php

	$day = "";
	$mon = "";
	
	$image	= "";
	$name	= "";
	$time	= "";
	$result = "";
	
	if(isset($_POST["day"]) && isset($_POST["month"])){
		$day	= $_POST["day"];
		$mon	= $_POST["month"];
		
		$flagShow	= true;
		if(is_numeric($day) && is_numeric($mon)){
			switch ($mon) {
				case 1:
					if($day <= 19) { $image 	= "capricorn";		$name	= "Ma kết";		$time	= "23/12 - 19/01";}
					if($day >= 20) { $image 	= "aquarius";		$name	= "Bảo Bình";	$time	= "20/01 - 19/02";}
					if($day < 1 || $day > 31) $flagShow	= false;
					break;
				case 2:
					if($day <= 19) { $image 	= "aquarius";		$name	= "Bảo Bình";	$time	= "20/01 - 19/02";}
					if($day >= 20) { $image 	= "pisces";			$name	= "Song Ngư";	$time	= "20/02 - 21/03";}
					if($day < 1 || $day > 29) $flagShow	= false;
					break;
				default:
					$flagShow = false;
					break;
			}
			
			if($flagShow == true){
				$result = '<div class="result">
				        	<img src="images/' . $image . '.jpg" alt="' . $image . '" />
				        	<p>' . $name . ' <span>('. ucfirst($image) .' : ' . $time . ')</span></p>
				        </div>';
			} else {
				$result = "Dữ liệu không hợp lệ";
			}
			
		} else {
			$flagShow	= false;
			$result = "Dữ liệu không hợp lệ";
		}
	}
?>		

<body>
	<div class="content">
		<h1>Bạn thuộc chòm sao gì?</h1>
        <form class="form" action="#" method="post" >
            <div class="row">
                <span>Ngày sinh</span>
                <input type="text" name="day" value="<?php echo $day;?>"/>
            </div>
            
            <div class="row">
                <span>Tháng sinh</span>
				<input type="text" name="month" value="<?php echo $mon;?>"/>
            </div>
            
            <div class="row">
                <input type="submit" value="Lấy chòm sao!" />
            </div>
        </form>
		<?php
			echo $result;
		?>
    </div>
</body>
</html>
