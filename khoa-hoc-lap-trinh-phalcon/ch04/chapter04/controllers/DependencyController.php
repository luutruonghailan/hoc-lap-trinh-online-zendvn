<?php
    namespace Multiphalcon\Chapter04\Controllers;
    use Multiphalcon\Vendor\Zendvn\Service\UserService;
use Multiphalcon\Vendor\Zendvn\Service\ExampleService;
								class DependencyController extends \Phalcon\Mvc\Controller
    {
        public function indexAction()
        {
            //Đăng ký dịch vụ
            $di = $this->getDI();
            $di->set('index_service', function ($name, $color){
                echo 'hello index_service';
                 echo '<h3 style="color:red">Name : '.$name.'</h3>';
                 echo '<h3 style="color:red">Color : '.$color.'</h3>';
            });
           
            
            
            //Gọi và sử dụng dịch vụ
            $di->get('index_service',['zendvn','brown']);
            //$di['index_service'];
            //$di->getIndex_service();
        }
        
        public function index2Action()
        {
            //Đăng ký dịch vụ
            $di = $this->getDI();
//             $di->set('index2_service', function (){
//                   return new UserService('index2-facebook', 'index2-yahoo');  
//             });
            $di['index2_service'] = function (){
                   return new UserService('index2-facebook', 'index2-yahoo');  
             };
            
        
        
            //Gọi và sử dụng dịch vụ
            $user = $di->get('index2_service');
            $user->showinfo();
            echo '<pre>';
                    print_r($user);
            echo '</pre>';
            
               
        }
        
        public function index3Action()
        {
            //Đăng ký dịch vụ
            $di = $this->getDI();
            //$di->set('index3_service', 'Multiphalcon\Vendor\Zendvn\Service\UserService');
           $di['index3_service'] = 'Multiphalcon\Vendor\Zendvn\Service\UserService';
        
        
        
        
           //Gọi và sử dụng dịch vụ
           $user = $di->get('index3_service',[
               'index3-facebook',
               'index3-yahoo'
           ]);
           echo '<pre>';
                   print_r($user);
           echo '</pre>';
               
                 
        }
        
        public function index4Action()
        {
            //Đăng ký dịch vụ
            $di = $this->getDI();
            //$di->set('index4_service', new UserService('index4_facebook', 'index4_yahoo'));
            $di['index4_service'] = new UserService('index4_facebook', 'index4_yahoo');
        
        
            //Gọi và sử dụng dịch vụ
            $user = $di->get('index4_service');
            echo '<pre>';
                print_r($user);
            echo '</pre>';
            echo '<h3 style="color:red">'.$user->showinfo().'</h3>';
             
        }
        
        public function index5Action()
        {
            //Đăng ký dịch vụ
            $di = $this->getDI();
            $di->set('index5_service', [
                'className'     =>  'Multiphalcon\Vendor\Zendvn\Service\UserService',
                'arguments'     =>  [
                    [
                        'type'      =>  'parameter',
                        'value'     =>  'index5-facebook'
                    ],
                    [
                        'type'      =>  'parameter',
                        'value'     =>  'index5-yahoo'
                    ],
                    
                ]
            ]);
            
        
            //Gọi và sử dụng dịch vụ
            $user = $di->get('index5_service',[
                'change-face',
                'change-yahoo'
            ]);
            echo '<pre>';
                print_r($user);
            echo '</pre>';
             
        }
        
        public function index6Action()
        {
            //Đăng ký dịch vụ
            $di = $this->getDI();
            $services = $di->getServices();
            $di->set('index6_service', [
                'className'     =>  'Multiphalcon\Vendor\Zendvn\Service\ExampleService',
                'arguments'     =>  [
                    [
                        'type'      =>  'service',
                        'name'      =>  'response'
                    ],
                   
                 ]
                    
                ]);
            
            
           
        
        
            //Gọi và sử dụng dịch vụ
            $di->get('index6_service');
            
             
        }
        
        public function index7Action()
        {
            //Đăng ký dịch vụ
            $di = $this->getDI();
            $di->set('index7_service', function (){
                return new UserService();
            },true);
            
        
        
             
        
        
            //Gọi và sử dụng dịch vụ
            $user = $di->get('index7_service');
            $user->setFace('new7-facebook');
            $user2 = $di->get('index7_service');
            echo '<pre>';
                    print_r($user);
            echo '</pre>';
            
            echo '<pre>';
                    print_r($user2);
            echo '</pre>';
            
        
             
        }
        
        public function index8Action()
        {
            //Đăng ký dịch vụ
            $di = $this->getDI();
            $di->set('index8_service', [
                'className'     =>  'Multiphalcon\Vendor\Zendvn\Service\UserService',
                'properties'    =>  [
                    [
                        'name'  =>  '_facebook',
                        'value' =>  ['type' => 'parameter', 'value' => 'index8-facebook']
                    ],
                    [
                        'name'  =>  '_yahoo',
                        'value' =>  ['type' => 'parameter', 'value' => 'index8-yahoo']
                    ]
                ]
            ]);
        
        
            //Gọi và sử dụng dịch vụ
            $user = $di->get('index8_service');
            $user->properties();
            
             
        }
        
        public function index9Action()
        {
            //Đăng ký dịch vụ
            $di = $this->getDI();
            $di->set('index9_service', function (){
                echo '<h3 style="color:red">index9_service -- dependencyController.php -- index9</h3>'; 
            });
            
           //Gọi và sử dụng dịch vụ
           $di->get('index9_service');
           $di->get('chapter04_service');
        }
        
        public function index10Action()
        {
            $di = $this->getDI();
           
            //Gọi và sử dụng dịch vụ
            //$di->get('index9_service');
            $di->get('chapter04_service');
            $di->get('application_service');
        }
        
        public function index11Action()
        {
            $di = $this->getDI();
            //Đăng ký dịch vụ
//             $di->set('same_service', function (){
//                 echo '<h3 style="color:red">same_service ---- dependencyController</h3>'; 
//             });
             
            //Gọi và sử dụng dịch vụ
           
            $di->get('same_service');
        }
        
        public function index12Action()
        {
            $di = $this->getDI();
            //Đăng ký dịch vụ
            $di->attempt('a_service', function (){
                 echo '<h3 style="color:red">a_service - dependencyController</h3>';
            });
            
            $di->attempt('b_service', function (){
                echo '<h3 style="color:red">b_service - dependencyController</h3>';
            });
             
            //Gọi và sử dụng dịch vụ
            $di->get('b_service');
             
           
        }
        
        public function index13Action()
        {
            $di = $this->getDI();
            $service = $di->getService('setting_service');
            $name    = $service->getName();
            $define  = $service->getDefinition();
            $service->setDefinition(function (){
                return new UserService();
            });
            $service->setShared(true);
            
            //Gọi và sử dụng dịch vụ
            $obj     = $service->resolve();
            $obj->setFace('index13-facebook');
            $obj2    = $service->resolve();
            echo '<pre>';
                    print_r($obj);
            echo '</pre>';
            echo '<pre>';
                print_r($obj2);
            echo '</pre>';
            
        }
        
       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    }