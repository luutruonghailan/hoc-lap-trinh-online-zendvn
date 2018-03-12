<?php
// ================================= Zend\Mvc\Router\Http\Hostname =================================
// http://zendskeleton.training.com

$hostnameRoute	= array(
		'type'		=> 'hostname',
		'options' 	=> array(
				'route' 	=> 'zendskeleton.training.com',
				'defaults' 	=> array(
						'__NAMESPACE__' => 'Mvc\Controller',
						'controller' 	=> 'Router',
						'action' 		=> 'index'
				)
		),
		//'priority'	=> 1
);

// ================================= Zend\Mvc\Router\Http\Literal =================================
// http://zendskeleton.training.com/contact
// http://zendskeleton.training.com/login.html	Mvc\Router\login

$literalRoute = array(
		'type'		=> 'Zend\Mvc\Router\Http\Literal',		// 'type'	=> 'Literal'
		'options' 	=> array(
				'route' 	=> '/login.html',
				'defaults' 	=> array(
						'__NAMESPACE__' => 'Mvc\Controller',
						'controller' 	=> 'Plugin',
						'action' 		=> 'success'
				),
		),
		'priority'	=> 100
);

// ================================= Zend\Mvc\Router\Http\Scheme =================================
// http://zendskeleton.training.com/account

$schemeAccountRoute = array(
		'type' 		=> 'Scheme',
		'options' 	=> array(
				'route' 	=> '/account',
				'scheme' 	=> 'http',
				'defaults'	=> array(
						'__NAMESPACE__'	=> 'Mvc\Controller',
						'controller' 	=> 'Router',
						'action' 		=> 'account',
				),
		),
);

// ================================= Zend\Mvc\Router\Http\Segment =================================
// /mvc/router/list/status/1/page/2/perPage/5/sortBy/asc
// /course/zend-framework-2x/10
// /course/zend-framework-2x++10

$segmentRoute	= array(
		'type' 		=> 'Segment',
		'options' 	=> array(
				//'route' 		=> '/:module[/:controller[/:action]][/]',
				//'route' 		=> '/:module/:controller/:action[/status/:status][/page/:page]',
				'route' 		=> '/course/:name{-}-:id{-}.:extension',
				'constraints' 	=> array(
						'name' 		=> '[a-zA-Z][a-zA-Z0-9-_]+',
						'id'		=> '[0-9]+',
						'extension'	=> 'html',
				),
				'defaults' => array(
						'__NAMESPACE__'	=> 'Mvc\Controller',
						'controller' 	=> 'Router',
						'action' 		=> 'course',
						'name' 			=> 'zf2',
						'id' 			=> 100,
				),
		),
);

// ================================= Zend\Mvc\Router\Http\Regex =================================
// mvc-router-course-name-id
// /course/zend-framework-2x/10
// /course/zend-framework-2x-10
// /course/zend-framework-2x-10.html
// /course/zend-framework-2x-10.php
// /course/zend-framework-2x-10.asp

$regexRoute = array(
		'type' 		=> 'Regex',
		'options' 	=> array(
				'regex' 	=> '/course/((?<name>[a-zA-Z][a-zA-Z0-9-_]+)-(?<id>[0-9]+).(?<extension>(html|php|asp)))?',
				'defaults' 	=> array(
						'__NAMESPACE__' 	=> 'Mvc\Controller',
						'controller' 		=> 'Router',
						'action' 			=> 'course',
						'name' 				=> 'zend-2x',
						'id' 				=> '100',
						'extension' 		=> 'phtml',
				),
				'spec' 		=> '/course/%name%-%id%.%extension%',
		),
);

// http://zendskeleton.training.com/
// http://zendskeleton.training.com/account/login.html
// http://zendskeleton.training.com/account/admin/user/index
// http://zendskeleton.training.com/account/admin/user/edit/2
// http://zendskeleton.training.com/account/admin/user/delete/2

$loginRoute	= array(
		'type'		=> 'Literal',
		'options' 	=> array(
				'route' 	=> '/login.html',
				'defaults' 	=> array(
						'__NAMESPACE__' => 'Mvc\Controller',
						'controller' 	=> 'Router',
						'action' 		=> 'login'
				),
		),
);

$routeOne = array(
		'type'		=> 'Literal',		
		'options' 	=> array(
				'route' 	=> '/account',
				'defaults' 	=> array(
						'__NAMESPACE__' => 'Mvc\Controller',
						'controller' 	=> 'Router',
						'action' 		=> 'index'
				),
		),
		'may_terminate'	=> true,
		'child_routes'	=> array(
				'login' 		=> $loginRoute,
				'manager_user'	=> array(
						'type' 		=> 'Segment',
						'options' 	=> array(
								'route' 		=> '/admin/user/:action[/:id]',	// account/admin/user/edit/2
								'constraints' 	=> array(
										'action'		=> '[a-zA-Z][a-zA-Z0-9-_]+',
										'id'			=> '[0-9]+',
								),
								'defaults' => array(
										'__NAMESPACE__'	=> 'Mvc\Controller',
										'controller' 	=> 'Router',
										'action' 		=> 'add',
										'id' 			=> 100,
								),
						),
				),
		)
);

$mvcRoute	= array(
		'type' => 'Literal',
		'options' => array (
				'route' => '/mvc',
				'defaults' => array (
						'__NAMESPACE__' => 'Mvc\Controller',
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
								'defaults' => array (
										'id'			=> 'johdoasd'
								) 
						) 
				) 
		) 
);

$dataRoute	= array(
		'type' => 'Literal',
		'options' => array (
				'route' => '/data',
				'defaults' => array (
						'__NAMESPACE__' => 'Data\Controller',
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
);

$homeRoute  = array(
		'type' => 'Zend\Mvc\Router\Http\Literal',
		'options' => array (
				'route' => '/',
				'defaults' => array (
						'__NAMESPACE__' => 'Mvc\Controller',
						'controller' 	=> 'Router',
						'action' 		=> 'index' 
				) 
		) 
);

return array(
	'router' => array(
			'routes' => array(
 					'literalRoute'	=> $literalRoute,
// 					'hostnameRoute'	=> $hostnameRoute,
// 					'schemeRoute'	=> $schemeAccountRoute,
// 					'segmentRoute'	=> $segmentRoute,
 					'regexRoute'	=> $regexRoute,
					'routeOne'		=> $routeOne,
					'mvcRoute'		=> $mvcRoute,
					'homeRoute'		=> $homeRoute,
					'dataRoute'		=> $dataRoute,
			),
	),
);




