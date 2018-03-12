<?php
use Phalcon\Mvc\Application;

$application = new Application($di);
$application->registerModules([
    'hello' => [
        'className' => 'Multiphalcon\Hello\Module',
        'path'      => APPLICATION_PATH.'/hello/Module.php'
    ],
    'chapter03' => [
        'className' => 'Multiphalcon\Chapter03\Module',
        'path'      => APPLICATION_PATH.'/chapter03/Module.php'
    ],
    'chapter04' => [
        'className' => 'Multiphalcon\Chapter04\Module',
        'path'      => APPLICATION_PATH.'/chapter04/Module.php'
    ],
    'chapter05' => [
        'className' => 'Multiphalcon\Chapter05\Module',
        'path'      => APPLICATION_PATH.'/chapter05/Module.php'
    ],
    'chapter06' => [
        'className' => 'Multiphalcon\Chapter06\Module',
        'path'      => APPLICATION_PATH.'/chapter06/Module.php'
    ],
    'chapter07' => [
        'className' => 'Multiphalcon\Chapter07\Module',
        'path'      => APPLICATION_PATH.'/chapter07/Module.php'
    ],
   
]);

echo $application->handle()->getContent();
