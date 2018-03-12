<?php
    namespace Multiphalcon\Chapter04\Controllers;
    class FlashController extends \Phalcon\Mvc\Controller
    {
        public function directAction()
        {
           
        }
        
        public function direct2Action()
        {
             
        }
        
        public function direct3Action()
        {
             
        }
        
        public function direct4Action()
        {
             
        }
        
        public function direct5Action()
        {
             $this->flash->outputMessage('success', 'this is success 5 message');
//              $this->dispatcher->forward([
//                  'action'   =>  'test'
//              ]);

             $this->response->redirect('chapter04/flash/test');
        }
        
        public function testAction()
        {
             echo '<h3 style="color:red">'.__METHOD__.'</h3>';
        }
        
        public function showAction()
        {
            echo '<h3 style="color:red">'.__METHOD__.'</h3>';
            $this->flashSession->output();
        }
        
        public function show2Action()
        {
            
        }
        
        public function show3Action()
        {
        
        }
        
        public function sessionAction()
        {
            $this->flashSession->success('this is flashSession success message');
            $this->response->redirect('chapter04/flash/show');
           
        }
        
        public function session2Action()
        {
            $this->flashSession->success('this is flashSession success message');
            $this->flashSession->error("this is flashSession error message");
            $this->flashSession->notice("this is flashSession notice message");
            $this->flashSession->warning("this is flashSession warning message");
            
            
            $this->response->redirect('chapter04/flash/show2');
             
        }
        
        public function session3Action()
        {
            
            
            
            
            $this->flashSession->message('success', 'this is flashSession success message 3');
            $this->flashSession->message('notice', 'this is flashSession notice message 3');
            $this->flashSession->message('error', 'this is flashSession error message 3');
            $this->flashSession->message('warning', 'this is flashSession warning message 3');
            $this->flashSession->message('abc',  'this is flashSession abc message 3');
            
           
        
        
            $this->response->redirect('chapter04/flash/show3');
             
        }
        
        
        public function session4Action()
        {
        
        
        
        
            //$this->flashSession->message('success', 'this is flashSession success message 4');
            //$this->flashSession->message('success', 'this is flashSession success message 42');
            
            $this->flashSession->message('notice', 'this is flashSession notice message 4');
            $this->flashSession->message('error', 'this is flashSession error message 4');
            $this->flashSession->message('warning', 'this is flashSession warning message 4');
            $this->flashSession->message('abc',  'this is flashSession abc message 4');
        
            
            $successMessage = [];
            if($this->flashSession->has('success') == true)
            {
                $successMessage = $this->flashSession->getMessages('success');
            }
            else 
            {
                echo "khong tồn tại";
            }
            echo '<pre>';
            print_r($successMessage);
            echo '</pre>';
           
             
        }
        
        
        
        
        
        
        
        
        
        
    }