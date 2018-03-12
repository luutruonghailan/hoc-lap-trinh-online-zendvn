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
	
	// John - Boy - 15
	// Peter - Boy - 18
	
	if(!empty($students)){
		foreach ($students as $key => $value){
			$name 	=  $value["name"];
			$sex 	=  ($value["sex"]==1) ? "Boy" : "Girl";
			$score 	= array_sum($value["score"]);
					
			echo "Name: " . $name . " - sex: " . $sex . " - score: " . $score . "<br />";
		}
	}