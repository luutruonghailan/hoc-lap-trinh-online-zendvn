<?php

return array (
	'router' => array(
        'routes' => array(
            'data' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/data',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Data\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
		
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
	'view_manager'	=> array(
		'template_path_stack'	=> array(__DIR__ . '/../view'),
	),

		
);