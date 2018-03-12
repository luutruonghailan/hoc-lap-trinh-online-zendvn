<?php
	$course = array();
	$course[0] = array('id' => 1, 'name' => 'Zend Framwork');
	$course[1] = array('id' => 2, 'name' => 'Joomla');
	$course[2] = array('id' => 3, 'name' => 'PHP');
	
	if(isset($_GET['key'])){

		$result = $course[$_GET['key']];
		echo json_encode($result);
	}
?>