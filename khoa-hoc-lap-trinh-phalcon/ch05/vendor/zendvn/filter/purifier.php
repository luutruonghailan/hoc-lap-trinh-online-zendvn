<?php
    namespace Multiphalcon\Vendor\Zendvn\Filter;
    class Purifier
    {
       protected $instance;
        
       public function __construct($arrConfig)
       {
           $config          =  \HTMLPurifier_Config::createDefault();
           $config->set($arrConfig[0], $arrConfig[1]);
           $this->instance  = new \HTMLPurifier_HTMLPurifier($config);
          
           
       }
        
        public function filter($input)
        {
            $output = $this->instance->purify($input);
           return $output;
        }
        
       
        
      
    }