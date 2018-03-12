<?php
	$connect = @mysql_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// DELTE
	mysql_select_db('manage_user');
	
	$id = 9;
	$query 	= "DELETE FROM `group` WHERE `id` = '" . $id . "'";
	$result = mysql_query($query);
	
	if($result){
		echo $total = mysql_affected_rows();
	}else{
		echo mysql_error();
	}
	mysql_close($connect);