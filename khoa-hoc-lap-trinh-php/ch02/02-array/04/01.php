<?php
	// Quan ly thong tin sinh vien
	// SV1 name, sex, scorce
	
	$students = array();
	$students["SV001"] = array("name" => "John", "sex" => 1, "score" => array(4,5,6));
	$students["SV002"] = array("name" => "Peter", "sex" => 1, "score" => array(5,6,7));
	$students["SV003"] = array("name" => "Marry", "sex" => 0, "score" => array(7,8,9));
	
	echo "<pre>";
	print_r($students);
	echo "</pre>";