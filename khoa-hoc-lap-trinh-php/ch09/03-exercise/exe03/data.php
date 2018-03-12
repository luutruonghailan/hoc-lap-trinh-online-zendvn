<?php
	require_once 'class/Database.class.php';
	$params = array(
						'server'	=> 'localhost',
						'username'	=> 'root',
						'password'	=> '',
						'database'	=> 'manage_user',
						'table'		=> 'news',
				);
	
	
	$database 	= new Database($params);
	$position	= $_GET['position'];
	$item		= $_GET['item'];
	$query	 	= "SELECT `id`, `title`, `description` FROM news LIMIT $position, $item";
	$list		= $database->listRecord($query);
	
	$xhtml = '';
	if(!empty($list)){
		foreach($list as $key => $value){
			$xhtml .= '<div class="item">
							<h3>'.$value['title'].'</h3>
							<p>'.$value['description'].'</p>
						</div>';
		}
	}
	echo $xhtml;
	