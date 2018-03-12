<?php
   
    define('APPLICATION_PATH', __DIR__);
    try {
        
        //loader
       require_once APPLICATION_PATH.'/application/config/loader.php';
        
        //dependency injection
       require_once APPLICATION_PATH.'/application/config/service.php';
        
        //application
        $application = new \Phalcon\Mvc\Application($di);
        echo $application->handle()->getContent();
        
    }catch (\Exception $e)
    {
        echo $e->getMessage();
    }
