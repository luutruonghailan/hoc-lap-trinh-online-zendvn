<?php
	$connect = @mysql_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// INSERT
	mysql_select_db('manage_user');
	
	echo $query = "INSERT INTO `group`(`name`, `status`, `ordering`) VALUES 
					('Member', '1', '10'),('Member 1', '1', '10')";
	$result = mysql_query($query, $connect);
	
	if($result){
		echo $total = mysql_affected_rows();
	}else{
		echo mysql_error();
	}
	mysql_close($connect);