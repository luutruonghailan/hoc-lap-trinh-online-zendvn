<?php

	$district = array(
						array('id' => 1, 'name' => 'Thủ Đức', 'city_id' => 1),
						array('id' => 2, 'name' => 'Bình Thạnh', 'city_id' => 1),
						array('id' => 3, 'name' => 'Quận 9', 'city_id' => 1),
						array('id' => 4, 'name' => 'Mỹ Tho', 'city_id' => 2),
						array('id' => 5, 'name' => 'Gò Công Tây', 'city_id' => 2),
						array('id' => 6, 'name' => 'Ninh Kiều', 'city_id' => 3),
						array('id' => 7, 'name' => 'Cái Răng', 'city_id' => 3),
					);
	
	$idCity = $_GET['idCity'];
	
	$xhtml = '<option value="0">Chọn quận huyện</option>';
	foreach($district as $key => $value){
		if($idCity == $value['city_id']){
			$xhtml .= '<option value="'.$value['id'].'">'.$value['name'].'</option>';
		}
	}
	echo $xhtml;