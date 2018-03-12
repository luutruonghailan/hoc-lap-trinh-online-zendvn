<?php

return array (
		
	'controllers'	=> array(
		'invokables'	=> array(
				'Training\Controller\Index'		=> 'Training\Controller\IndexController',
				'Training\Controller\Config'	=> 'Training\Controller\ConfigController',
			)
	),
	'view_manager'	=> array(
		'template_path_stack'	=> array(__DIR__ . '/../../view'),
	),
		
		
		
		
);