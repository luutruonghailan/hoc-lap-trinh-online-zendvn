<?php
	// Kết nối
	$connect = @mysql_connect('localhost', 'root', '');
	
	// Kiểm tra kết nối
	if(!$connect){
		die('<h3>Fail</h3>');
	}
	
	echo '<h3>Success</h3>';
	
	// Chọn database
	mysql_select_db('manage_user', $connect);
	
	
	// Đóng kết nối
	mysql_close($connect);