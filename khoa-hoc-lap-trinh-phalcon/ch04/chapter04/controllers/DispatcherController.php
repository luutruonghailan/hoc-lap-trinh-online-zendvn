<?php
    namespace Multiphalcon\Chapter04\Controllers;
    class DispatcherController extends \Phalcon\Mvc\Controller
    {
//         public function initialize()
//         {
//              echo '<h3 style="color:red">04 - initialize </h3>';
             
//         }
        
//         public function beforeExecuteRoute($disptcher)
//         {
//             echo '<h3 style="color:red">beforeExecuteRoute - DispatcherController.php</h3>';
//             echo '<pre>';
//                     print_r($disptcher);
//             echo '</pre>';
//         }
        
//         public function afterExecuteRoute($disptcher)
//         {
//             echo '<h3 style="color:red">afterExecuteRoute - DispatcherController.php</h3>';
//         }
        
        public function indexAction()
        {
            echo "<br>===================indexAction=========================Start";
                echo '<h3 style="color:red">'.__METHOD__.'</h3>';
                $this->dispatcher->forward([
                    'action'    =>  'detail'
                ]);
            echo "<br>===================indexAction=========================End";
            
            
        }
        
        public function index2Action()
        {
            echo "<br>===================index2Action=========================Start";
            echo '<h3 style="color:red">'.__METHOD__.'</h3>';
            
                $this->dispatcher->forward([
                    'action'    =>  'detail',
                    'params'    =>  [
                        'name'      =>  'zendvn',
                        'color'     =>  'green'
                    ]
                ]);
                
            echo "<br>===================index2Action=========================End";
        
        
        }
        
        public function index3Action()
        {
            echo "<br>===================index3Action=========================Start";
                $this->dispatcher->forward([
                        'controller'    =>  'index',
                        'action'        =>  'research'
                ]);
        
            echo "<br>===================index3Action=========================End";
        
        
        }
        
        public function index4Action()
        {
            echo "<br>===================index4Action=========================Start";
            $this->dispatcher->forward([
                'namespace'     =>  'Multiphalcon\Chapter03\Controllers',
                'controller'    =>  'index',
                'action'        =>  'research03'
            ]);
        
            echo "<br>===================index4Action=========================End";
        
        
        }
        
        public function index5Action()
        {
            echo "<br>===================index5Action=========================Start";
            $this->dispatcher->setParam('school', 'A Chau');
            $this->dispatcher->setParam('class', '12A');
            
            $this->dispatcher->setParams([
                    'name'  =>  'abc',
                    'age'   => 20
            ]);
            
            $this->dispatcher->forward([
               
                'action'        =>  'detail2'
            ]);
        
            echo "<br>===================index5Action=========================End";
        
        
        }
        
        public function index6Action()
        {
            echo "<br>===================index6Action=========================Start";
                 echo '<h3 style="color:red">'.__METHOD__.'</h3>';
                 $this->dispatcher->forward([
                        'action'        =>  'show'
                 ]);
        
            echo "<br>===================index6Action=========================End";
        
        
        }
        
        public function index7Action()
        {
            
            //tên module
            $module             = $this->dispatcher->getModuleName();
            
            //tên controller
            $controller         = $this->dispatcher->getControllerName();
            
            //tên action
            $action             = $this->dispatcher->getActionName();
            
            //activeController
            $activeController   = $this->dispatcher->getActiveController();
            
            //activeMethod
            $activeMethod       = $this->dispatcher->getActiveMethod();
            
            //class controller
            $classController    = $this->dispatcher->getControllerClass();
            
            //tên namespce
            $namespce           = $this->dispatcher->getNamespaceName();
            
            //FactoryDefault 
            $di                 = $this->dispatcher->getDI();
            
            //default namespce
            $defaultNamespace  = $this->dispatcher->getDefaultNamespace();
            
            echo '<pre>';
                    print_r($defaultNamespace);
            echo '</pre>';
           
        
        }
        
        public function index8Action()
        {
            echo "<br>===================index8Action=========================Start";
            echo '<h3 style="color:red">'.__METHOD__.'</h3>';
            $this->dispatcher->forward([
                'namespace'     =>  'Multiphalcon\Chapter03\Controllers',
                'controller'    =>  'index',
                'action'        =>  'forward'
            ]);
            echo "<br>===================index8Action=========================End";
        
        }
        
        public function index9Action()
        {
            echo "<br>===================index9Action=========================Start";
                echo '<h3 style="color:red">'.__METHOD__.'</h3>';
                
               $dependencyInjector = $this->getDI();
               $dispatcher = new \Phalcon\Mvc\Dispatcher();
               $dispatcher->setDI($dependencyInjector);
               
               $dispatcher->setActionName('show');
               $dispatcher->setControllerName('dispatcher');
               $dispatcher->setModuleName('chapter04');
               $dispatcher->setNamespaceName('Multiphalcon\Chapter04\Controllers');
               $dispatcher->dispatch();
              
            echo "<br>===================index9Action=========================End";
        
        }
        
        public function index10Action()
        {
            echo "<br>===================index10Action=========================Start";
            echo '<h3 style="color:red">'.__METHOD__.'</h3>';
        
            $dependencyInjector = $this->getDI();
            $dispatcher = new \Phalcon\Mvc\Dispatcher();
            $dispatcher->setDI($dependencyInjector);
            $dispatcher->setDefaultNamespace('Multiphalcon\Chapter04\Controllers');
            $dispatcher->setDefaultAction('index1');
            $dispatcher->setDefaultController('abc');
             
            echo '<pre>';
            print_r($dispatcher);
            echo '</pre>';
//             $dispatcher->setActionName('show');
//             $dispatcher->setControllerName('dispatcher');
//             $dispatcher->setModuleName('chapter04');
//             $dispatcher->setNamespaceName('Multiphalcon\Chapter04\Controllers');
            $dispatcher->dispatch(); //index index 
           
        
            echo "<br>===================index10Action=========================End";
        
        }
        
        public function index11Action()
        {
            echo "<br>===================index11Action=========================Start";
            echo '<h3 style="color:red">'.__METHOD__.'</h3>';
        
            $dependencyInjector = $this->getDI();
            $dispatcher = new \Phalcon\Mvc\Dispatcher();
            $dispatcher->setDI($dependencyInjector);
          
                         $dispatcher->setActionName('index');
                         $dispatcher->setControllerName('test');
                         $dispatcher->setModuleName('chapter04');
                         $dispatcher->setNamespaceName('Multiphalcon\Chapter04\Controllers');
                         $dispatcher->setControllerSuffix('CT');
                         $dispatcher->setActionSuffix('AC');
            $dispatcher->dispatch(); 
            // chapter04 testController indexAction
            // chapter04 testCT indexAC
            
             
        
            echo "<br>===================index11Action=========================End";
        
        }
        
        public function index12Action()
        {
            echo "<br>===================index12Action=========================Start";
            $this->dispatcher->setParam('name', 'zendvn');          
             
        
            echo "<br>===================index12Action=========================End";
        
        }
        
        public function index13Action()
        {
            //http://zendvnphalcon.com/chapter04/dispatcher/index13/$key1/$value1/$key2/$value2
//             [
//                 $key1 = $value1,
//                 $key2 = $value2
//             ]

            /*
             * Array
                        (
                            [0] => name
                            [1] => zendvn 
                            [2] => id
                            [3] => 20   
                        )
                        
                        Array
                        (
                            [name] => zendvn                           
                            [id] =>  20  
                            
                        )
                        
             */
            echo "<br>===================index13Action=========================Start";
             echo '<h3 style="color:red">'.__METHOD__.'</h3>';
             $params = $this->dispatcher->getParams();
             echo '<pre>';
                     print_r($params);
             echo '</pre>';
             
        
            echo "<br>===================index13Action=========================End";
        
        }
        
        
       
        
        public function showAction()
        {
            echo "<br>===================showAction=========================Start";
            echo '<h3 style="color:red">'.__METHOD__.'</h3>';
            
            echo "<br>===================showAction=========================End";
        }
        
        
        
        
        
        
        public function detailAction()
        {
            echo "<br>===================DetailAction=========================Start";
                $params  = $this->dispatcher->getParams();
                $name    = $this->dispatcher->getParam('name', 'upper', 'default name');
                $color   = $this->dispatcher->getParam('colors', null, 'default color');
                echo '<pre>';
                        print_r($params);
                echo '</pre>';
                echo '<h3 style="color:red">Name: '.$name.'</h3>'; //ZENDVN
                echo '<h3 style="color:red">Color : '.$color.'</h3>'; //default color
            echo "<br>===================DetailAction=========================End";
        }
        
        public function detail2Action()
        {
            echo "<br>===================detail2Action=========================Start";
            $params  = $this->dispatcher->getParams();
            echo '<pre>';
            print_r($params);
            echo '</pre>';
            echo "<br>===================detail2Action=========================End";
        }
        
        
        
       
        
        
    }