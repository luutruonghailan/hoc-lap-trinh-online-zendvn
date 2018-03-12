<?php
$router = new \Phalcon\Mvc\Router();

$router->add(
    '/:module/:controller/:action/:params',
    [
        'module'        =>      1,
        'controller'    =>      2,
        'action'        =>      3,
        'params'        =>      4
    ]
);

//pagination
$router->add(
     // 1         2         3           4
    '/:module/:controller/:action/page/{id}',
    [
        'module'        =>      1,
        'controller'    =>      2,
        'action'        =>      3,
        'params'        =>      4
    ]
);
$router->add(
    '/abc',
    [
        'module'        =>      'chapter04',
        'controller'    =>      'helper',
        'action'        =>      'goal'
    ]
)->setName('linkhelper');

$router->add(
    '/responserouter',
    [
        'module'        =>      'chapter04',
        'controller'    =>      'response',
        'action'        =>      'index3',
       
    ]
)->setName('redirect');
    
$router->add(
    '/show/{title}/{id}',
    [
        'module'        =>      'chapter04',
        'controller'    =>      'url',
        'action'        =>      'show',
         
    ]
)->setName('show-url');
    
    
$router->add(
        '/form',
        [
            'module'        =>      'chapter06',
            'controller'    =>      'volt',
            'action'        =>      'index',
             
        ]
)->setName('form-index');
    
   
        
    
    

return $router;