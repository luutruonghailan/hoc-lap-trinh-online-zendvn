<?php
	function joinString($str1, $str2, $joinCharacter = " "){
		$result = $str1 . $joinCharacter . $str2;
		return $result;
	}
	
	$result = joinString("PHP", "is easy", "-----------");
	echo $result;