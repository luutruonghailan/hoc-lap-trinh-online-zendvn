<?php
    namespace Multiphalcon\Vendor\Zendvn\Grouprouter;
    class Groupchapter04 extends \Phalcon\Mvc\Router\Group
    {
        public function initialize()
        {
            $this->setPaths([
                'module'        =>  'chapter04',
                'controller'    =>  'router'
            ]);
            $this->setPrefix('/groupchapter04');
            
            $this->add(
                        '/fix',
                        [
                                'action'    =>  'edit'
                        ]
                    );
            
            $this->add(
                        '/update',
                        [
                                'action'    =>  'update'
                        ]
                     );
            
        }
        

        

        

        
     
    }