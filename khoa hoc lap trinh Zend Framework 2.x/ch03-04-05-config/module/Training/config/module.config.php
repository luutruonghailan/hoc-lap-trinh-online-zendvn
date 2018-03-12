<?php

return array (
	'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Training\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'training' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/training',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Training\Controller',
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
				'Training\Controller\Index'		=> 'Training\Controller\IndexController',
				'Training\Controller\Config'	=> 'Training\Controller\ConfigController',
				'Training\Controller\Test'		=> 'Training\Controller\TestController',
			)
	),
	'view_manager'	=> array(
		'template_path_stack'	=> array(__DIR__ . '/../view'),
	),
		
		
		
		
);