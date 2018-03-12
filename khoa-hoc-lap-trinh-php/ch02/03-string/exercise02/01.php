<?php
	$str	= "   nguyen      VAn     An " ;
	
	function formatString($str, $type = null){
		// Dua tat ca cac ky tu ve dang chu thuong
		$str	= strtolower($str);
		
		// Loai bo khoang trang dau va cuoi chuoi
		$str	= trim($str);
		
		// Loai bo khoang trang du thua giua cac tu
		
		$array 	= explode(" ", $str);
		foreach($array as $key => $value){
			if(trim($value) == null) {
				unset($array[$key]);
				continue;
			}
			
			// Xu ly cho danh tu
			if($type=="danh-tu") {
				$array[$key] = ucfirst($value);
			}
		}
		
		$result = implode(" ", $array);
		
		// Chuyen ky tu dau tien thanh chu hoa
		$result	= ucfirst($result);
		
		return $result;
	}
	
	$result = formatString($str, "danh-tu");
	echo $result . "<br />";
	echo strlen($result) . "<br />";
	
	
	

	