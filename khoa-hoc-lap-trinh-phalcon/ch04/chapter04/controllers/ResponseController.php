<?php
    namespace Multiphalcon\Chapter04\Controllers;
    class ResponseController extends \Phalcon\Mvc\Controller
    {
        public function indexAction()
        {
            //$this->response->redirect('chapter04/response/index2');
            //$this->response->redirect('chapter03/index/index');
            //$this->response->redirect('https://www.google.com/');
            $this->response->redirect([
                    'for'   =>  'redirect'
            ]);
            
            
        }
        
        public function index2Action()
        {
             echo '<h3 style="color:red">'.__METHOD__.'</h3>';
        }
        
        public function index3Action()
        {
            echo '<h3 style="color:red">'.__METHOD__.'</h3>';
        }
        
        
        
        
    }