<?php
	require_once 'class/Database.class.php';
	$params		= array(
			'server' 	=> 'localhost',
			'username'	=> 'root',
			'password'	=> '',
			'database'	=> 'manage_user',
			'table'		=> 'group',
	);
	$database = new Database($params);