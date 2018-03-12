<?php
	// Quan ly thong tin sinh vien

	$students	= array(
							"SV001" => array("name" => "John",
											 "sex"	=> 1,
											 "score"=> array(4,5,6)
										),
							"SV002" => array("name" => "Peter",
											 "sex"	=> 1,
											 "score"=> array(5,6,7)
										),
							"SV003" => array("name" => "Marry",
											 "sex"	=> 0,
											 "score"=> array(7,8,9)
										),
						);
	
	echo "<pre>";
	print_r($students);
	echo "</pre>";
	
	// Ten cua SV002
	echo $students["SV002"]["name"] . "<br />";				// Pêter
	
	// Diem mon thu 2 cua SV003
	echo $students["SV003"]["score"][1] . "<br />";			// 8
	
	// Thay doi ten cua SV003 thanh Anne
	$students["SV003"]["name"]	= "Anne";
			
	// Thay doi diem cua SV003 mon 2 thanh 10
	$students["SV003"]["score"][1]	= 10;
	
	
	echo "<pre>";
	print_r($students);
	echo "</pre>";