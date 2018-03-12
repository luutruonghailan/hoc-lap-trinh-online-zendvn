<?php
    namespace Multiphalcon\Chapter03\Controllers;
    class IndexController extends \Phalcon\Mvc\Controller
    {
        public function indexAction()
        {
            echo 'multiphalcon - module chapter03 - indexController - indexAction';
        }
        
        public function index1Action()
        {
           $di = $this->getDI();
           //$di->get('chapter04_service');
           $di->get('application_service');
        }
        
        public function research03Action()
        {
            echo "<br>===================research03Action=========================Start";
                    echo '<h3 style="color:red">'.__METHOD__.'</h3>';
            echo "<br>===================research03Action=========================End";
        }
        
        public function forwardAction()
        {
            echo "<br>===================forwardAction=========================Start";
                $previousAction     = $this->dispatcher->getPreviousActionName(); //index8
                $previousControl    = $this->dispatcher->getPreviousControllerName(); //dispatcher
                $lastController     = $this->dispatcher->getLastController(); // dispatcher obj
                echo '<pre>';
                        print_r($lastController);
                echo '</pre>';
                echo '<h3 style="color:red">'.__METHOD__.'</h3>';
            echo "<br>===================forwardAction=========================End";
        }
        
        
    }