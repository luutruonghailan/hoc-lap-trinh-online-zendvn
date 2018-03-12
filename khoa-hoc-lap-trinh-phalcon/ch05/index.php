<?php
   require_once  'define.php';
  
    try {
        //loader
        require_once APPLICATION_PATH.'/config/loader.php';
        
        //dependency injection
        require_once APPLICATION_PATH.'/config/service.php';
        
        //application
        require_once APPLICATION_PATH.'/config/application.php';
        
    }
    catch (\Exception $e)
    {
        echo $e->getMessage();
        
       
        
    }