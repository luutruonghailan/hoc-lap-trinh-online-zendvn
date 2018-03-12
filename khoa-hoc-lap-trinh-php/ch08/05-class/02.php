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
	
	$arrData = array('name'=>'Member 1234', 'status' => 0, 'ordering' => 9);
	
	echo $lastID = $database->insert($arrData);
	
