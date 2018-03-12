<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 
	$connect = @mysql_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	mysql_select_db('manage_user');
	
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET CHARACTER SET 'utf8'");

	$id = $_GET['id'];
	if(is_numeric($id)){
		$query	= "SELECT * FROM `group` WHERE `id` = '$id'";
	
		$result = @mysql_query($query);
		while($row = mysql_fetch_assoc($result)){
			echo '<pre>';
			print_r($row);
			echo '</pre>';
		}
	}
	mysql_close($connect);
?>            


	
	
	
	
	
	