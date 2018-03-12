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
	
	$query[] 	= "SELECT `g`.`id`,`g`.`name`,`g`.`status`,`g`.`ordering`, COUNT(`u`.id) AS total";
	$query[] 	= "FROM `group` AS `g` LEFT JOIN `user` AS `u` ON `g`.`id` = `u`.`group_id`";
	$query[] 	= "GROUP BY `g`.`id`";
	
	$query		= implode(" ", $query);
	
	
	$database->query($query);
	$list = $database->listRecord();

	echo '<pre>';
	print_r($list);
	echo '</pre>';
	
