<?php
$loader = new \Phalcon\Loader();

$loader->registerDirs([
    'application/controllers',
    'application/models',
    'application/views',
     
])->register();
