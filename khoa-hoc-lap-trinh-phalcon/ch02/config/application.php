<?php
use Phalcon\Mvc\Application;

$application = new Application($di);
$application->registerModules([
    'hello' => [
        'className' => 'Multiphalcon\Hello\Module',
        'path'      => APPLICATION_PATH.'/hello/Module.php'
    ]
]);

echo $application->handle()->getContent();
