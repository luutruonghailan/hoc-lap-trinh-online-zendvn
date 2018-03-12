<?php
	$connect = @mysql_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// UPDATE
	mysql_select_db('manage_user');
	
	$query = "UPDATE `group` SET `status` = '1'
				   WHERE `ordering` = 9";
	
	$result = mysql_query($query, $connect);
	
	if($result){
		echo $total = mysql_affected_rows();
	}else{
		echo mysql_error();
	}
	mysql_close($connect);