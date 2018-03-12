<?php
    namespace Multiphalcon\Chapter04\Controllers;
    class IndexController extends \Phalcon\Mvc\Controller
    {
        public function indexAction()
        {
            echo 'multiphalcon - module chapter04 - indexController - indexAction';
        }
        
        public function index1Action()
        {
            $module     = $this->dispatcher->getModuleName();
            $controller = $this->dispatcher->getControllerName();
            $action     = $this->dispatcher->getActionName();
            
            echo 'Module : '.$module;
            echo '<hr>';
            echo 'Controller : '.$controller;
            echo '<hr>';
            echo 'Action : '.$action;
        }
        
        public function researchAction()
        {
            echo "<br>===================researchAction=========================Start";
             echo '<h3 style="color:red">'.__METHOD__.'</h3>';
            echo "<br>===================researchAction=========================End";
        }
        
        
    }