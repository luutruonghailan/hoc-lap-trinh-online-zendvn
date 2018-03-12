<?php
    namespace Multiphalcon\Chapter04\Controllers;
    class ErrorController extends \Phalcon\Mvc\Controller
    {
        public function notfoundAction()
        {
             echo '<h3 style="color:red">Action not found</h3>';
        }
        
       
        
        
    }