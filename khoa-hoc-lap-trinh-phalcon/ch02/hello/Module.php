<?php 
    namespace Multiphalcon\Hello;
    class Module implements \Phalcon\Mvc\ModuleDefinitionInterface
    {
        public function registerAutoloaders(\Phalcon\DiInterface $dependencyInjector = null)
        {
            $loader = new \Phalcon\Loader();
            $loader->registerNamespaces([
                'Multiphalcon\Hello\Controllers'    =>  APPLICATION_PATH.'/hello/controllers',
                'Multiphalcon\Hello\Models'         =>  APPLICATION_PATH.'/hello/models',
            ]);
            $loader->register();
        }        
       
        public function registerServices(\Phalcon\DiInterface $dependencyInjector)
        {
            //service dispatcher 
            $dependencyInjector->set('dispatcher', function (){
               $dispatcher = new \Phalcon\Mvc\Dispatcher();
               $dispatcher->setDefaultNamespace('Multiphalcon\Hello\Controllers');
               return $dispatcher;
            });
            
            // service view
            $dependencyInjector->set('view', function (){
                $view = new \Phalcon\Mvc\View();
                $view->setViewsDir(APPLICATION_PATH.'/hello/views');
                return $view;
            });
        }
    }
