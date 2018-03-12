<?php
$di = new Phalcon\Di\FactoryDefault();
$di->set('view', function (){
    $view = new \Phalcon\Mvc\View();
    $view->setViewsDir('application/views');
    return $view;
});