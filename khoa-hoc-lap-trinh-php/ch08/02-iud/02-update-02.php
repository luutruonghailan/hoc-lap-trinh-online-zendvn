<?php
	$connect = @mysql_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// UPDATE
	mysql_select_db('manage_user');
	
	function createUpdateSQL($data){
		$newQuery = "";
		if(!empty($data)){
			foreach($data as $key => $value){
				$newQuery .= ", `$key` = '$value'";
			}
		}
		$newQuery = substr($newQuery, 2);
		return $newQuery;
	}
	
	$data = array('status' => 1, 'ordering' => 100, 'name' => 'Manager');
	
	$newQuery = createUpdateSQL($data);
	$query = "UPDATE `group` SET " . $newQuery . " WHERE `id` = 200";
	
	$result = mysql_query($query, $connect);
	
	if($result){
		echo $total = mysql_affected_rows();
	}else{
		echo mysql_error();
	}
	mysql_close($connect);