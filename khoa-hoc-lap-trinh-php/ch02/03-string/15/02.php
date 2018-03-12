<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	echo $str	= "Trong năm 2013, nhà sản xuất Hàn Quốc sẽ không phát hành các mẫu TV LCD (đèn nền CCFL) thông thường mà tập trung vào các dòng TV LED (LCD dùng đèn nền LED) và TV UHD."; 

	function truncateString($str, $maxChars = 50, $holder = "..."){
		
		$result = $str;
		if(strlen($str) > $maxChars){
			$result = substr($str, 0, $maxChars) . $holder;
		}
		
		return $result;
	}
	
	$str = truncateString($str, 60, "...");
	echo "<br />" . $str;
?>
