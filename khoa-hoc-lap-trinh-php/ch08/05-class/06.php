<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	require_once 'Database.class.php';
	
	$params		= array(
						'server' 	=> 'localhost',
						'username'	=> 'root',
						'password'	=> '',
						'database'	=> 'manage_user',
						'table'		=> 'group',
					);
	
	$database = new Database($params);
	
	$query[] 	= "SELECT * ";
	$query[] 	= "FROM `group`";
	$query[] 	= "ORDER BY `ordering` DESC";
	$query		= implode(" ", $query);
	
	
	$database->query($query);
	$list = $database->singleRecord();

	echo '<pre>';
	print_r($list);
	echo '</pre>';
	
