<?php 
    namespace Multiphalcon\Chapter03;
    class Module implements \Phalcon\Mvc\ModuleDefinitionInterface
    {
        public function registerAutoloaders(\Phalcon\DiInterface $dependencyInjector = null)
        {
            $loader = new \Phalcon\Loader();
            $loader->registerNamespaces([
                'Multiphalcon\Chapter03\Controllers'    =>  APPLICATION_PATH.'/chapter03/controllers',
                'Multiphalcon\Chapter03\Models'         =>  APPLICATION_PATH.'/chapter03/models',
            ]);
            $loader->register();
        }        
       
        public function registerServices(\Phalcon\DiInterface $dependencyInjector)
        {
            //service dispatcher 
            $dependencyInjector->set('dispatcher', function (){
               $dispatcher = new \Phalcon\Mvc\Dispatcher();
               $dispatcher->setDefaultNamespace('Multiphalcon\Chapter03\Controllers');
               return $dispatcher;
            });
            
            // service view
            $dependencyInjector->set('view', function (){
                $view = new \Phalcon\Mvc\View();
                $view->setViewsDir(APPLICATION_PATH.'/chapter03/views');
                return $view;
            });
        }
    }
