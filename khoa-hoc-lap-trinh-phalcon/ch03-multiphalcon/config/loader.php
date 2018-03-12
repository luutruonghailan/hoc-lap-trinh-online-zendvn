<?php
$loader = new \Phalcon\Loader();
$loader->registerClasses([
    'Multiphalcon\Vendor\Zendvn\Filter\AddLink'                     => APPLICATION_PATH.'/vendor/zendvn/filter/AddLink.php',
    'Multiphalcon\Vendor\Zendvn\Filter\RemoveCircumflex'            => APPLICATION_PATH.'/vendor/zendvn/filter/RemoveCircumflex.php',
    'Multiphalcon\Vendor\Zendvn\Filter\Purifier'                    => APPLICATION_PATH.'/vendor/zendvn/filter/Purifier.php',
    'Multiphalcon\Vendor\Zendvn\Grouprouter\Groupchapter04'         => APPLICATION_PATH.'/vendor/zendvn/grouprouter/groupchapter04.php',
]);

$loader->registerNamespaces([
    'Multiphalcon\Vendor\Zendvn\Helper'                     =>   APPLICATION_PATH.'/vendor/zendvn/helper',
    'Multiphalcon\Vendor\Zendvn\Event'                      =>   APPLICATION_PATH.'/vendor/zendvn/event',
    'Multiphalcon\Vendor\Zendvn\Listener'                   =>   APPLICATION_PATH.'/vendor/zendvn/listener',
    'Multiphalcon\Vendor\Zendvn\Service'                    =>   APPLICATION_PATH.'/vendor/zendvn/service',
    'Multiphalcon\Chapter03\Controllers'                    =>   APPLICATION_PATH.'/chapter03/controllers',
    'Multiphalcon\Chapter06\Forms\Element'                  =>   APPLICATION_PATH.'/chapter06/forms/elements',
    'Multiphalcon\Chapter06\Forms\Form'                     =>   APPLICATION_PATH.'/chapter06/forms/form',
    'Multiphalcon\Chapter06\Validation\Validator'           =>   APPLICATION_PATH.'/chapter06/validation/validator',
    'Multiphalcon\Chapter06\Validation'                     =>   APPLICATION_PATH.'/chapter06/validation',
    'Multiphalcon\Chapter06\Forms\Entity'                   =>   APPLICATION_PATH.'/chapter06/forms/entity',
    'Multiphalcon\Vendor\Zendvn\Upload'                     =>   APPLICATION_PATH.'/vendor/zendvn/upload',
    'Multiphalcon\Vendor\Zendvn\Validator'                  =>   APPLICATION_PATH.'/vendor/zendvn/validator',
    
    
]);

$loader->registerPrefixes([
    'HTMLPurifier'      =>  LIBRARY_PATH.'/HTMLPurifier'
]);
$loader->register();