<?php
	$menu	= array();
	$menu[] = array('id' => 1, 'name' => 'Home', 'parents' => 0);
	$menu[] = array('id' => 2, 'name' => 'About', 'parents' => 0);
	$menu[] = array('id' => 3, 'name' => 'News', 'parents' => 0);
	$menu[] = array('id' => 4, 'name' => 'Products', 'parents' => 0);
	$menu[] = array('id' => 5, 'name' => 'Contact', 'parents' => 0);
	$menu[] = array('id' => 6, 'name' => 'Tin trong nuoc', 'parents' => 3);
	$menu[] = array('id' => 7, 'name' => 'Tin nuoc ngoai', 'parents' => 3);
	$menu[] = array('id' => 8, 'name' => 'CNTT', 'parents' => 6);
	$menu[] = array('id' => 9, 'name' => 'Lap trinh', 'parents' => 6);
	$menu[] = array('id' => 10, 'name' => 'IT', 'parents' => 7);
	$menu[] = array('id' => 11, 'name' => 'Programming', 'parents' => 7);
	$menu[] = array('id' => 12, 'name' => 'Software', 'parents' => 4);
	$menu[] = array('id' => 13, 'name' => 'Mobi', 'parents' => 4);
	$menu[] = array('id' => 14, 'name' => 'Anti Virus', 'parents' => 12);
	$menu[] = array('id' => 15, 'name' => 'Nokia', 'parents' => 13);
	$menu[] = array('id' => 16, 'name' => 'Samsung', 'parents' => 13);
	$menu[] = array('id' => 17, 'name' => 'S1', 'parents' => 16);
	$menu[] = array('id' => 18, 'name' => 'S1.1', 'parents' => 17);
	
	function recursive($source, $parent, $level, &$newArray){
		if(count($source) > 0) {
			foreach ($source as $key => $value){
				if($value['parents'] == $parent){
					$value['level'] = $level;
					$newArray[] 	= $value;
					unset($source[$key]);
					$newParent = $value['id'];
					recursive($source, $newParent, $level + 1, $newArray);
				}
			}
		}
	}
	

	recursive($menu, 0, 1, $newArray);
?>
<select name="selectbox" id="selectbox" style="min-width: 200px; padding: 3px;" size="10">
<?php
	foreach($newArray as $key => $value){
		if($value['level'] == 1){
			echo '<option value="'.$value['id'].'">+'.$value['name'].'</option>';
		}else{
			$name = str_repeat('&nbsp;', ($value['level']-1) * 5) . '-' . $value['name'];
			echo '<option value="'.$value['id'].'">'.$name.'</option>';
		}
	} 
?>
</select>





















