<?php 
    namespace Multiphalcon\Chapter04;
    use Phalcon\Mvc\Url;
				class Module implements \Phalcon\Mvc\ModuleDefinitionInterface
    {
        public function registerAutoloaders(\Phalcon\DiInterface $dependencyInjector = null)
        {
            $loader = new \Phalcon\Loader();
            $loader->registerNamespaces([
                'Multiphalcon\Chapter04\Controllers'    =>  APPLICATION_PATH.'/chapter04/controllers',
                'Multiphalcon\Chapter04\Models'         =>  APPLICATION_PATH.'/chapter04/models',
            ]);
            $loader->register();
        }        
       
        public function registerServices(\Phalcon\DiInterface $dependencyInjector)
        {
            //service dispatcher 
            
            /*
             * 01- beforeDispatchLoop 		yes
               02- beforeDispatch			yes
               03- beforeExecuteRoute		yes
               04- initialize				no
               05- afterExecuteRoute		no
               06- beforeNotFoundAction	    yes
               07- beforeException			yes
               08- afterDispatch			yes
               09- afterDispatchLoop		no
             */
            $dependencyInjector->set('dispatcher', function (){
               $eventManager = new \Phalcon\Events\Manager();
//                $eventManager->attach('dispatch:afterExecuteRoute', function ($event, $dispatcher){
//                    echo '<h3 style="color:red">05 - '.$event->getType().'</h3>';
                   
//                });
               
//                $eventManager->attach('dispatch:afterDispatchLoop', function ($event, $dispatcher){
//                    echo '<h3 style="color:red">09 - '.$event->getType().'</h3>';
//                    return false;
//                });
               
//                $eventManager->attach('dispatch:beforeDispatch', function ($event, $dispatcher){
//                    echo '<h3 style="color:red">02 - '.$event->getType().'</h3>';
                  
                    
//                });
               
//                $eventManager->attach('dispatch:beforeDispatchLoop', function ($event, $dispatcher){
//                     echo '<h3 style="color:red">01 - '.$event->getType().'</h3>';
                   
                   
//                });
              
               
//                $eventManager->attach('dispatch:beforeExecuteRoute', function ($event, $dispatcher){
//                    echo '<h3 style="color:red">03 - '.$event->getType().'</h3>';
                   
//                });
               
               
               
//                $eventManager->attach('dispatch:beforeNotFoundAction', function ($event, $dispatcher){
//                    echo '<h3 style="color:red">06 - '.$event->getType().'</h3>';
//                    echo '<h4 style="color:green">action không được tìm thấy</h4>';
                   
//                });
               
//                $eventManager->attach('dispatch:beforeException', function ($event, $dispatcher){
//                    echo '<h3 style="color:red">07 - '.$event->getType().'</h3>';
                   
//                });
               
//                $eventManager->attach('dispatch:afterDispatch', function ($event, $dispatcher){
//                    echo '<h3 style="color:red">08 - '.$event->getType().'</h3>';
                   
//                });
                        
               
               //cách 2
               $eventManager->attach('dispatch', function ($event, $dispatcher){
//                     if($event->getType() == 'beforeNotFoundAction')
//                     {
//                         $dispatcher->forward([
//                             'controller'    =>  'error',
//                             'action'        =>  'notfound'
//                         ]);
//                         return false;
//                     }
                   
//                     if($event->getType() == 'beforeDispatchLoop')
//                     {
//                         echo '<h3 style="color:red">01 - '.$event->getType().'</h3>';
//                         $params = $dispatcher->getParams();
//                         echo '<pre>';
//                                 print_r($params);
//                         echo '</pre>';
//                     }
                    
//                     if($event->getType() == 'afterExecuteRoute')
//                     {
//                         echo '<h3 style="color:red">01 - '.$event->getType().'</h3>';
//                         $params = $dispatcher->getParams();
//                         echo '<pre>';
//                         print_r($params);
//                         echo '</pre>';
//                     }

//                        if($event->getType() == 'beforeExecuteRoute')
//                        {
//                            echo '<h3 style="color:red">beforeExecuteRoute - Module.php</h3>';
//                        }
                       
//                        if($event->getType() == 'afterExecuteRoute')
//                        {
//                            echo '<h3 style="color:red">afterExecuteRoute - Module.php</h3>';
//                        }
                    
               
/*
                     * Array
                    (
                        [0] => name
                        [1] => zendvn   
                        [2] => id
                        [3] => 20  $key = 3 $value = 20
                    )
                    
                        Array
                        (
                            [name] => zendvn                           
                            [id] =>  20  
                            
                        )
 */
//                     if($event->getType() == 'beforeDispatchLoop')
//                     {
//                         echo '<h3 style="color:red">01 - '.$event->getType().'</h3>';
//                         $changeParam = [];
//                         $params = $dispatcher->getParams();
//                         foreach ($params as $key => $value)
//                         {
//                             if($key % 2 != 0)
//                             {
//                                 $changeParam[$params[$key - 1]]  = $params[$key]; //$value
//                             }
//                         }
//                         $dispatcher->setParams($changeParam);
                       
                        
//                     }
                    
               });
              
                            
               
               
               
               
               
               $dispatcher   = new \Phalcon\Mvc\Dispatcher();
               $dispatcher->setDefaultNamespace('Multiphalcon\Chapter04\Controllers');
               $dispatcher->setEventsManager($eventManager);
               
               return $dispatcher;
            });
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            // service view
            $dependencyInjector->set('view', function (){
                $view = new \Phalcon\Mvc\View();
                $view->setViewsDir(APPLICATION_PATH.'/chapter04/views');
                return $view;
            });
            
            
            $dependencyInjector->set('chapter04_service', function (){
                 echo '<h3 style="color:red">chapter04_service -- Module.php -- chapter04</h3>'; 
            });
            
            $dependencyInjector->set('same_service', function (){
                echo '<h3 style="color:red">same_service ---- Module.php --- chapter04 </h3>';
            });
            
           
            
            
        
            
            
            
            
            
            
            
            
            
        }
    }
