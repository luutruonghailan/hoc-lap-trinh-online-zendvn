<?php
	// Kết nối
	$connect = @mysql_connect('localhost', 'root', '');
	
	// Kiểm tra kết nối
	if(!$connect){
		die('<h3>Fail</h3>');
	}
	
	echo '<h3>Success</h3>';
	
	// Danh sách database
	$databases = mysql_list_dbs($connect);
	
	/*
	while($row = mysql_fetch_array($databases)){
		echo '<pre>';
		print_r($row);
		echo '</pre>';
	}
	*/
	
	while($row = mysql_fetch_object($databases)){
		echo '<h3>' . $row->Database . '</h3>';
	}
	
	// Đóng kết nối
	mysql_close($connect);