<?php
	$connect = @mysql_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// INSERT
	mysql_select_db('manage_user');
	
	$arrData = array(
						array('name'=>'Admin 1', 'status' => 0, 'ordering' => 9),
						array('name'=>'Admin 2'),
						array('name'=>'Admin 3', 'ordering' => 9),
						array('id' => 200, 'name'=>'Admin 4', 'ordering' => 99, 'status' => 0)
					);

	function createInsertSQL($data){
		$newQuery = array();
		if(!empty($data)){
			foreach($data as $key=> $value){
				$cols .= ", `$key`";
				$vals .= ", '$value'";
			}
		}
		$newQuery['cols'] = substr($cols, 2);
		$newQuery['vals'] = substr($vals, 2);
		return $newQuery;
	}
	
	foreach($arrData as $value){
		$newQuery = createInsertSQL($value);
		$query = "INSERT INTO `group`(".$newQuery['cols'].") VALUES (".$newQuery['vals'].")";
		mysql_query($query, $connect);
	}
	
	mysql_close($connect);
	
	
	
	
	
	
	
	
	
	
	