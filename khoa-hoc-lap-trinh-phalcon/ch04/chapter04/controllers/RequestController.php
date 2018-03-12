<?php
    namespace Multiphalcon\Chapter04\Controllers;
    class RequestController extends \Phalcon\Mvc\Controller
    {
        public function indexAction()
        {
            // GET SERVERNAME
            $serverName         =   $this->request->getServerName();
            $serverName2        =   $this->request->getServer('SERVER_NAME');
            
            //GET SERVER_ADDR
            $serverAdd          =   $this->request->getServerAddress();
            $serverAdd2         =   $this->request->getServer('SERVER_ADDR');
            
            //accept content
            $httpAccept         =   $this->request->getAcceptableContent();
            $httpAccept2        =   $this->request->getServer('HTTP_ACCEPT');
            
            //LANGUAGE
            $language           =   $this->request->getLanguages();
            $language2          =   $this->request->getServer('HTTP_ACCEPT_LANGUAGE');
            $bestLanguage       =   $this->request->getBestLanguage();
            
            $httpUserAgent      =   $this->request->getUserAgent();
            $httpUserAgent2     =   $this->request->getServer('HTTP_USER_AGENT');
            
            $httpHost           =   $this->request->getHttpHost();
            $httpHost2          =   $this->request->getServer('HTTP_HOST');
            
            echo '<pre>';
                    print_r($_SERVER);
            echo '</pre>';
           
             echo '<h3 style="color:red">$httpHost   : '.$httpHost .'</h3>';
             echo '<h3 style="color:red">$httpHost2    : '.$httpHost2  .'</h3>';
            
        }
        
        public function index2Action()
        {
            if($this->request->isPost())
            {
                //$params     =   $this->request->getPost($name, $filter, $default, $notAllowEmpty);
                $params     =   $this->request->getPost();
                $username   =   $this->request->getPost('username','upper','default username', true);
                $city       =   $this->request->getPost('city','int', 'default city', true);
                $method     =   $this->request->getMethod();
//                 echo '<pre>';
//                         print_r($params);
//                 echo '</pre>';
//                 echo '<h3 style="color:red">Username - true : '.$username.'</h3>';
//                 echo '<h3 style="color:red">City - true: '.$city.'</h3>';
//                 echo '<h3 style="color:red">Method: '.$method.'</h3>';
//                 if($this->request->isMethod('POST'))
//                 {
//                     echo "post method";
//                 }
//                 else 
//                 {
//                     echo "not post method";
//                 }
                   if($this->request->hasPost('username'))
                   {
                       echo 'yes';
                   }
                   else 
                   {
                       echo "no";
                   }
                   
       
                $this->view->disable();
            }
            
            
        
        }
        
        public function index3Action()
        {
            
        }
        
        public function index4Action()
        {
        
        }
        
        public function index5Action()
        {
            $header = $this->request->getHeaders();
            $accept = $this->request->getHeader('Accept');
            echo '<pre>';
                    print_r($header);
            echo '</pre>';
             echo '<h3 style="color:red">Accept : '.$accept.'</h3>';
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
       
    }