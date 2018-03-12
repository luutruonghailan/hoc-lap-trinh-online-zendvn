<?php
$loader = new \Phalcon\Loader();
$loader->registerClasses([
    'Multiphalcon\Vendor\Zendvn\Filter\Addlink'                     => APPLICATION_PATH.'/vendor/zendvn/filter/addlink.php',
    'Multiphalcon\Vendor\Zendvn\Filter\Removecircumflex'            => APPLICATION_PATH.'/vendor/zendvn/filter/removecircumflex.php',
    'Multiphalcon\Vendor\Zendvn\Filter\Purifier'                    => APPLICATION_PATH.'/vendor/zendvn/filter/purifier.php',
    'Multiphalcon\Vendor\Zendvn\Grouprouter\Groupchapter04'         => APPLICATION_PATH.'/vendor/zendvn/grouprouter/groupchapter04.php',
]);

$loader->registerNamespaces([
    'Multiphalcon\Vendor\Zendvn\Helper'           =>   APPLICATION_PATH.'/vendor/zendvn/helper',
    'Multiphalcon\Vendor\Zendvn\Event'            =>   APPLICATION_PATH.'/vendor/zendvn/event',
    'Multiphalcon\Vendor\Zendvn\Listener'         =>   APPLICATION_PATH.'/vendor/zendvn/listener',
    'Multiphalcon\Vendor\Zendvn\Service'          =>   APPLICATION_PATH.'/vendor/zendvn/service',
    'Multiphalcon\Chapter03\Controllers'          =>   APPLICATION_PATH.'/chapter03/controllers',
]);

$loader->registerPrefixes([
    'HTMLPurifier'      =>  LIBRARY_PATH.'/HTMLPurifier'
]);
$loader->register();