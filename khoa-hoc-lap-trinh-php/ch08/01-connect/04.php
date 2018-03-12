<?php
	// Kết nối
	$connect = @mysql_connect('localhost', 'root', '');
	
	// Kiểm tra kết nối
	if(!$connect){
		die('<h3>Fail</h3>');
	}
	
	echo '<h3>Success</h3>';
	
	// Danh sách table
	$tables = mysql_list_tables('manage_user', $connect);
	
	while($row = mysql_fetch_array($tables)){
 		echo '<h3>' . $row[0] . '</h3>';
	}
	
	// Đóng kết nối
	mysql_close($connect);