<?php

return array(
	'router' => array(
		'routes' => array(
				'formRoute'	=> array(
						'type' => 'Literal',
						'options' => array (
								'route' => '/form',
								'defaults' => array (
										'__NAMESPACE__' => 'Form\Controller',
										'controller' 	=> 'Index',
										'action' 		=> 'index'
								)
						),
						'may_terminate' => true,
						'child_routes' => array (
								'default' => array (
										'type' 		=> 'Segment',
										'options' 	=> array (
												'route' => '/[:controller[/:action]][/]',
												'constraints' => array (
														'controller' 	=> '[a-zA-Z][a-zA-Z0-9_-]*',
														'action' 		=> '[a-zA-Z][a-zA-Z0-9_-]*'
												),
												'defaults' => array ()
										)
								)
						)
				),
		),
	),
		
		
    'controllers' => array(
        'invokables' => array(
            'Form\Controller\Index' 		=> 'Form\Controller\IndexController',
            'Form\Controller\Validator' 	=> 'Form\Controller\ValidatorController',
            'Form\Controller\File' 			=> 'Form\Controller\FileController',
            'Form\Controller\HtmlFive' 		=> 'Form\Controller\HtmlFiveController',
            'Form\Controller\FormElement'	=> 'Form\Controller\FormElementController',
            'Form\Controller\FormFilter'	=> 'Form\Controller\FormFilterController',
        ),
    ),
		
	'view_manager'	=> array(
			'template_path_stack'		=> array(__DIR__ . '/../view'),
	),
		
);
