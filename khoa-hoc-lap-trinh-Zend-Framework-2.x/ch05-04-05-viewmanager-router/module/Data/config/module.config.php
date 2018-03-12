<?php

return array (
		
	'controllers'	=> array(
		'invokables'	=> array(
				'Data\Controller\Index'			=> 'Data\Controller\IndexController',
				'Data\Controller\Filter'		=> 'Data\Controller\FilterController',
				'Data\Controller\Serializer'	=> 'Data\Controller\SerializerController',
				'Data\Controller\Escaper'		=> 'Data\Controller\EscaperController',
				'Data\Controller\Purifier'		=> 'Data\Controller\PurifierController',
				'Data\Controller\Dom'			=> 'Data\Controller\DomController',
				'Data\Controller\Json'			=> 'Data\Controller\JsonController',
			)
	),
// 	'view_manager'	=> array(
// 		'template_path_stack'	=> array(__DIR__ . '/../view'),
// 	),

	'service_manager' => array(
			'invokables'	=> array(
    				'Mvc\Service\Facebook'		=> 'Mvc\Service\FacebookService',
					'Mvc\Service\User'			=> 'Mvc\Service\UserService',
    		),
    		'aliases'	=> array(
    				'MSU'		=> 		'Mvc\Service\User'
    		),
	),
);