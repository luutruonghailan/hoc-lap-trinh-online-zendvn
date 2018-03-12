<?php
    namespace Multiphalcon\Chapter04\Controllers;
    class RouterController extends \Phalcon\Mvc\Controller
    {
        public function indexAction()
        {
            echo 'multiphalcon - module chapter04 - routerController - indexAction';
        }
        
        public function index1Action()
        {
            echo 'multiphalcon - module chapter04 - routerController - index1Action';
        }
        
        public function index2Action()
        {
            echo 'multiphalcon - module chapter04 - routerController - index1Action';
        }
        
        public function logoutAction()
        {
            echo 'multiphalcon - module chapter04 - routerController - logoutAction';
        }
        
        public function getparamAction()
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
        
        public function paramAction()
        {
            $module     = $this->dispatcher->getModuleName();
            $controller = $this->dispatcher->getControllerName();
            $action     = $this->dispatcher->getActionName();
            $param      = $this->dispatcher->getParams();
            $year       = $this->dispatcher->getParam('year');
            $month      = $this->dispatcher->getParam('month');
            $day        = $this->dispatcher->getParam('days');
            $name       = $this->dispatcher->getParam('name','upper');
            
            echo '<pre>';
                    print_r($param);
            echo '</pre>';
        
            echo 'Module : '.$module;
            echo '<hr>';
            echo 'Controller : '.$controller;
            echo '<hr>';
            echo 'Action : '.$action;
            echo '<hr>';
            echo 'Year : '.$year;
            
            echo '<hr>';
            echo 'month : '.$month;
            echo '<hr>';
            echo 'day : '.$day;
            echo '<hr>';
            echo 'name : '.$name;
        }
        
        public function hostAction()
        {
            echo __METHOD__;
        }
        
        public function postAction()
        {
            echo __METHOD__;
        }
        
        public function getAction()
        {
            echo __METHOD__;
        }
        
        public function editAction()
        {
            echo __METHOD__;
        }
        
        public function updateAction()
        {
            echo __METHOD__;
        }
        
        public function convertAction()
        {
            $module     = $this->dispatcher->getModuleName();
            $controller = $this->dispatcher->getControllerName();
            $action     = $this->dispatcher->getActionName();
            $param      = $this->dispatcher->getParams();
           
            $name       = $this->dispatcher->getParam('name');
            
            echo '<pre>';
                    print_r($param);
            echo '</pre>';
        
            echo 'Module : '.$module;
            echo '<hr>';
            echo 'Controller : '.$controller;
            echo '<hr>';
            echo 'Action : '.$action;
            echo '<hr>';
           
            echo '<hr>';
            echo 'name : '.$name;
        }
        
        
        
    }