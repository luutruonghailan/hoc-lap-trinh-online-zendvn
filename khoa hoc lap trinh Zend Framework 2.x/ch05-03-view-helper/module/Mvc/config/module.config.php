<?php
return array (
	'router' => array(
        'routes' => array(
            'mvc' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/mvc',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Mvc\Controller',
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
		
	'controllers'		=> array(
		'invokables'	=> array(
				'Mvc\Controller\Index'			=> 'Mvc\Controller\IndexController',
				'Mvc\Controller\Event'			=> 'Mvc\Controller\EventController',
				'Mvc\Controller\Service'		=> 'Mvc\Controller\ServiceController',
				'Mvc\Controller\ViewHelper'		=> 'Mvc\Controller\ViewHelperController',
			)
	),
	'view_manager'	=> array(
		// Base URL path to the application
		// 'base_path'					=> '/zendskeleton/vendor',
		'doctype'					=> 'HTML5',
		'template_path_stack'		=> array(__DIR__ . '/../view'),
		'template_map' => array(
				'layout/layout'     => __DIR__ . '/../view/layout/layout.phtml',
				'layout/home'     	=> __DIR__ . '/../view/layout/layout2.phtml',
		),
	),

	'view_helpers'	=> array(
		'invokables' => array(
				'sayhello'		=> 'ZendVN\View\Helper\SayHello',
		),
	),
			
	'service_manager' 				=> array(
		'invokables'				=> array(
				'Mvc\Service\User'		=> 'Mvc\Service\UserService',
				'Mvc\Service\Facebook'	=> '\Mvc\Service\FacebookService',
		),
		'allow_override'			=> true,
		'aliases'					=> array(
				'MSU'				=> 'Mvc\Service\User'
		),
		'abstract_factories'		=> array(
				// 'Mvc\Service\MyAbstractFactory'
		),
		'initializers'				=> array(
				// 'Mvc\Service\MyInitalizer',
		),
		'services'					=> array(
				// 'abc'				=> new \Mvc\Service\UserService(),
		)
	),
);