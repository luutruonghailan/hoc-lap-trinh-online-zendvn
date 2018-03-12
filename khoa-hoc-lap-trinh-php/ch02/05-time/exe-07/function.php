<?php
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
	
function addTime($date, $format, $type, $value){
	$arrDate	= date_parse_from_format($format, $date);
	$type = strtolower($type);
	switch ($type){
		case 'day':
			$ts = mktime(0, 0, 0, $arrDate['month'],  $arrDate['day'] + $value,  $arrDate['year']);
			break;
		case 'month':
			$ts = mktime(0, 0, 0, $arrDate['month'] + $value,  $arrDate['day'],  $arrDate['year']);
			break;
		case 'year':
			$ts = mktime(0, 0, 0, $arrDate['month'],  $arrDate['day'],  $arrDate['year'] + $value);
			break;
	}
	$result = date($format, $ts);
	return $result;
} 
?>