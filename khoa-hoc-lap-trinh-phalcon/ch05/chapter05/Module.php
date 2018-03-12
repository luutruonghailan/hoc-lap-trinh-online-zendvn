<?php 
    namespace Multiphalcon\Chapter05;
    use Phalcon\Mvc\View\Engine\Volt;
				class Module implements \Phalcon\Mvc\ModuleDefinitionInterface
    {
        public function registerAutoloaders(\Phalcon\DiInterface $dependencyInjector = null)
        {
            $loader = new \Phalcon\Loader();
            $loader->registerNamespaces([
                'Multiphalcon\Chapter05\Controllers'    =>  APPLICATION_PATH.'/chapter05/controllers',
                'Multiphalcon\Chapter05\Models'         =>  APPLICATION_PATH.'/chapter05/models',
            ]);
            $loader->register();
        }        
       
        public function registerServices(\Phalcon\DiInterface $dependencyInjector)
        {
            //service dispatcher 
            $dependencyInjector->set('dispatcher', function (){
               $dispatcher = new \Phalcon\Mvc\Dispatcher();
               $dispatcher->setDefaultNamespace('Multiphalcon\Chapter05\Controllers');
               return $dispatcher;
            });
            
            // service view
            $dependencyInjector->set('view', function (){
                $view = new \Phalcon\Mvc\View();
                $view->setViewsDir(APPLICATION_PATH.'/chapter05/views');
                $view->registerEngines([
                    //'.phtml'     =>  'Phalcon\Mvc\View\Engine\Volt'
                    '.phtml'    =>  function($view){
                        $volt = new Volt($view);
                        $volt->setOptions([
                            'compileAlways'     => true
                        ]);
                        $compiler = $volt->getCompiler();
                        //cach 1:
                        $compiler->addFunction('volt_strlen', 'strlen');
                        
                        //cách 2:
                        $compiler->addFunction('volt_word_count', function($param, $exp) use($compiler){
                                $first = $compiler->expression($exp[0]['expr']);
                                
                                return 'str_word_count('.$first.')';
                        } );
                        
                        
                        $compiler->addFilter('volt_strrev', 'strrev');
                        
                        return $volt;
                    }
                ]);
                return $view;
            });
        }
    }
