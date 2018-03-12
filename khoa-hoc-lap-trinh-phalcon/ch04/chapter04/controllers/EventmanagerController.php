<?php
    namespace Multiphalcon\Chapter04\Controllers;
    use Phalcon\Events\Manager;
use Multiphalcon\Vendor\Zendvn\Event\Event01;
use Multiphalcon\Vendor\Zendvn\Listener\Somelist;
				class EventmanagerController extends \Phalcon\Mvc\Controller
    {
        public function indexAction()
        {
            $eventManager = new Manager();
            $eventManager->attach('event:01', function (){
                echo '<h3 style="color:red">event - doing01</h3>';
                
            });
            
            $eventManager->attach('event:02', function (){
                echo '<h3 style="color:red">event - doing02</h3>'; 
            });
            
            $eventManager->fire('event:01', $this);
            $eventManager->fire('event:02', $this);
        }
        
        //Them cong viec cho cac su kien
        public function index2Action()
        {
            $eventManager = new Manager();
            $eventManager->attach('event:01', function (){
                echo '<h3 style="color:red">event:01 - doing01</h3>';
        
            });
            
            $eventManager->attach('event:01', function (){
                echo '<h3 style="color:red">event:01 - doing02</h3>';
            
            });
        
            $eventManager->attach('event:02', function (){
                echo '<h3 style="color:red">event:02 - doing01</h3>';
            });
            
            $eventManager->attach('event:02', function (){
                echo '<h3 style="color:red">event:02 - doing02</h3>';
            });
            
            $eventManager->attach('event:02', function (){
                echo '<h3 style="color:red">event:02 - doing03</h3>';
            });

            $eventManager->fire('event:01', $this);
            $eventManager->fire('event:02', $this);
        }
        
        //Truyen tham so thu 2 cho phuong thuc attach
        public function index3Action()
        {
            $eventManager = new Manager();
            $listener01   = function (){
                echo '<h3 style="color:red">event:01 - doing01</h3>';
            };
           
            $eventManager->attach('event:01', $listener01);
        
            $eventManager->fire('event:01', $this);
        }
        
        //tìm hiểu về độ ưu tiên của các công việc trong cùng một sự kiện
        public function index4Action()
        {
            $eventManager = new Manager();
            $eventManager->enablePriorities(false);
            $eventManager->attach('event:01', function (){
                echo '<h3 style="color:red">event:01 - doing01 - 200</h3>';
            },200);
            
            $eventManager->attach('event:01', function (){
                echo '<h3 style="color:red">event:01 - doing02 - 30</h3>';
            },30);
                
            $eventManager->attach('event:01', function (){
                echo '<h3 style="color:red">event:01 - doing03 - 101</h3>';
            },101);
                    
            $eventManager->attach('event:01', function (){
                echo '<h3 style="color:red">event:01 - doing04 - 100</h3>';
            },100);
            
            if($eventManager->arePrioritiesEnabled() == true)
            {
                echo "enabled";
            }
            else 
                echo "disabled";
            
            $eventManager->fire('event:01', $this);
            
            
        }
        
        public function index5Action()
        {
            $eventManager = new Manager();
            $data = [
                'name'  =>  'phalcon',
                'city'  =>  'hcm'
            ];
            $eventManager->attach('event:02', function ($e, $obj, $data){
                echo '<h3 style="color:red">event:01 - doing01</h3>';
                echo '<pre>';
                        print_r($data);
                echo '</pre>';
            });
        
               
        
            $eventManager->fire('event:02', $this, $data);
        
        
        }
        
        public function index6Action()
        {
            $eventManager = new Manager();
            $data = [
                'name'  =>  'phalcon',
                'city'  =>  'hcm'
            ];
            $eventManager->attach('event:02', function ($e, $obj, $data){
                echo '<h3 style="color:red">event:02 - doing01</h3>';
                //type event
//                 $e->setType('abc');
//                 echo 'type event : '.$e->getType();
                
                //getsource 
                //$e->getSource()
                
                //get data
               
                $e->setData(['change' => 'data-change']);
                
                echo '<pre>';
                print_r( $e->getData());
                echo '</pre>';
            });
        
                 
        
           $eventManager->fire('event:02', $this, $data);
        
        
        }
        
        public function index7Action()
        {
            $eventManager = new Manager();
            $eventManager->enablePriorities(true);
           
            $eventManager->attach('event:01', function ($e, $obj, $data){
                echo '<h3 style="color:red">event:01 - doing01</h3>';
               
            },20);
            
            $eventManager->attach('event:01', function ($e, $obj, $data){
                echo '<h3 style="color:red">event:01 - doing02</h3>';
               
                 
            },50);
                
            $eventManager->attach('event:01', function ($e, $obj, $data){
                echo '<h3 style="color:red">event:01 - doing03</h3>';
                
            },10);
                    
            $eventManager->attach('event:01', function ($e, $obj, $data){
                echo '<h3 style="color:red">event:01 - doing04</h3>';
                if($e->isStopped())
                {
                    echo "is stop";
                }
                else 
                    echo "is not stop";
                 
            },100);
            
            $eventManager->attach('event:01', function ($e, $obj, $data){
                echo '<h3 style="color:red">event:01 - doing05</h3>';
                $e->stop();
                if($e->isStopped())
                {
                    echo "is stop";
                }
                else
                    echo "is not stop";
                 
            },30);
            //event:01 - doing04
            //event:01 - doing02
            //event:01 - doing05    $e->stop();
            //event:01 - doing01
            //event:01 - doing03
        
                 
        
           $eventManager->fire('event:01', $this);
        
        
        }
        
        public function index8Action()
        {
            $eventManager = new Manager();
             
            $eventManager->attach('event:01', function ($e, $obj, $data){
                echo '<h3 style="color:red">event:01 - doing01</h3>';
                 
            });
        
            $eventManager->attach('event:01', function ($e, $obj, $data){
                echo '<h3 style="color:red">event:01 - doing02</h3>';
                 
                 
            });
        
            $eventManager->attach('event:01', function ($e, $obj, $data){
                echo '<h3 style="color:red">event:01 - doing03</h3>';

            });
            
            $eventManager->attach('event:02', function (){
                echo '<h3 style="color:red">event:02 - doing01</h3>';
            });
        
            $eventManager->attach('event:02', function (){
                echo '<h3 style="color:red">event:02 - doing02</h3>';
            });

            $eventManager->detachAll('event:01');
            $eventManager->detachAll('event:02');
        
            $eventManager->fire('event:01', $this);
            $eventManager->fire('event:02', $this);
        
        
        }
        
        public function index9Action()
        {
            $eventManager = new Manager();
            $eventManager->collectResponses(true);
             
            $eventManager->attach('event:01', function ($e, $obj, $data){
                return 'response 01';
                 
            });
        
            $eventManager->attach('event:01', function ($e, $obj, $data){
                return 'response 02';
                 
                 
            });
        
            $eventManager->attach('event:01', function ($e, $obj, $data){
                return 'response 03';

            });
        
            $eventManager->attach('event:02', function ($e, $obj, $data){
                return 'response 04';
            
            });
           
            $eventManager->fire('event:02', $this);
            $eventManager->fire('event:01', $this);
            $response  = $eventManager->getResponses();
            
            echo '<pre>';
                    print_r($response);
            echo '</pre>';       
 
        
        }
        
        public function index10Action()
        {
           $eventsManager = new Manager();
           $event01 = new Event01();
           $event01->setEventsManager($eventsManager);
           $eventsManager->attach('abc', new Somelist());
           $event01->showinfo();
        }
        
        
        
        
        
        
       
    }