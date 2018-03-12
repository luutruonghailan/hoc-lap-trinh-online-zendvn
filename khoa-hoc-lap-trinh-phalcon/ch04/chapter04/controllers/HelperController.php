<?php
    namespace Multiphalcon\Chapter04\Controllers;
    use Phalcon\Tag;
use Multiphalcon\Vendor\Zendvn\Helper\Zendhelper;
	class HelperController extends \Phalcon\Mvc\Controller
    {
        //set doctype
        public function indexAction()
        {
           //$this->tag->setDocType(Tag::HTML401_FRAMESET);
            $this->tag->setDocType(Tag::HTML5);
        }
                     
        //view helper linkTo
        public function index2Action()
        {
            
        }
        
        //thiết lập title
        public function index3Action()
        {
            
            $this->tag->setTitle('index32');
            $this->tag->prependTitle('zendvn_');
            
            //zendvn_index32
        }
        
        //Tạo ra các thẻ image
        public function index4Action()
        {
        
           
        }
        
        //Nhúng các tập tin css
        public function index5Action()
        {
        
             
        }
        
        //nhúng các tập tin javascript
        public function index6Action()
        {
        
             
        }
        
        //Tạo ra một view helper
        public function index7Action()
        {
            new Zendhelper();
             
        }
        
       
        
        public function goalAction()
        {
            echo __METHOD__;
        }
      
    }