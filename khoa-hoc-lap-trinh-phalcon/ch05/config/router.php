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

return $router;