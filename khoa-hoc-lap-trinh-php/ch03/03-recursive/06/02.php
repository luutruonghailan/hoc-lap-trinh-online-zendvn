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
	
	function recursive($source, $parent, &$newString){
		if(count($source) > 0) {
			$newString .= '<ul>';
			foreach ($source as $key => $value){
				if($value['parents'] == $parent){
					$value['name'] = '<a href="category.php?cateid='.$value['id'].'">' . $value['name'] . '</a>';
					$newString .= '<li>'. $value['name'];
					unset($source[$key]);
					$newParent = $value['id'];
					recursive($source, $newParent, $newString);
					$newString .= '</li>';
				}
			}
			$newString .= '</ul>';
		}
	}
	

	recursive($menu, 0, $newString);
	$newString = str_replace('<ul></ul>', '', $newString);
	echo $newString;

?>





















