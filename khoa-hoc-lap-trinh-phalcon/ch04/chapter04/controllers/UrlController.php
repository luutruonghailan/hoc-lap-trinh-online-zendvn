<?php
    namespace Multiphalcon\Chapter04\Controllers;
    class UrlController extends \Phalcon\Mvc\Controller
    {
        public function indexAction()
        {
            $imageUrl = $this->url->get('public/image/Koala.jpg');
            $cssUrl   = $this->url->get('public/css/me.css');
            
            echo '<img src="'.$imageUrl.'" width="300px" height="200px">';
            echo '<link rel="stylesheet" href="'.$cssUrl.'">';
            echo 'Image Url : '.$imageUrl;
        }
        
        public function index2Action()
        {
            $this->url->setBaseUri('chapter04/url/');
            $baseUrl = $this->url->getBaseUri();
            $imageUrl = $this->url->get('public/image/Koala.jpg'); // chapter04/url/public/image/Koala.jpg
            $cssUrl   = $this->url->get('public/css/me.css'); // chapter04/url/public/css/me.css
            echo $baseUrl;
            echo '<hr>';
            echo $imageUrl;
            echo '<hr>';
            echo $cssUrl; 
        }
        
        public function index3Action()
        {
            $infoUrl = $this->url->get('chapter04/url/info',['book_name' => 'phalcon book','price' => 500]);
            $zenvnUrl = $this->url->get('http://zend.vn',[], true);
            $zenvnUrl2 = $this->url->get('http://zend.vn',[],false);
            echo '<a href="'.$infoUrl.'">go-to-infoAction</a>';
            echo '<hr>';
            echo '<a href="'.$zenvnUrl.'">go-to-zendvn-local</a>';
            echo '<hr>';
            echo '<a href="'.$zenvnUrl2.'">go-to-zendvn</a>';
            
        }
        
        public function index4Action()
        {
            $showUrl = $this->url->get([
                'for'   =>  'show-url',
                'title' =>  'phalcon title',
                'id'    =>  123 
            ]);
            echo '<a href="'.$showUrl.'">go-to-show-url</a>';
        
        }
        
        public function index5Action()
        {
            $path = $this->url->path(APPLICATION_PATH.'/chapter04/tamp/path.php');
            
            require_once $path;
            
        
        }
        
        public function index6Action()
        {
            $this->url->setBasePath(APPLICATION_PATH);
            $basePath = $this->url->getBasePath();
            
            $path = $this->url->path(APPLICATION_PATH.'/chapter04/tamp/path.php');
            
            echo 'basePath : '.$basePath;
            echo '<hr>';
            echo $path; // C:\xampp\htdocs\multiphalconC:\xampp\htdocs\multiphalcon/chapter04/tamp/path.php
        
        
        }
        
        public function index7Action()
        {
            $this->url->setStaticBaseUri('base/');
            $staticUrl  = $this->url->getStatic('chapter04/url/show');  
            $staticBaseUrl = $this->url->getStaticBaseUri();       
            echo '<a href="'.$staticUrl.'">go-to-showAction</a>';
            echo '<hr>';
            echo $staticBaseUrl;
            echo '<hr>';
            echo $staticUrl; // base/chapter04/url/show
           
        
        }
        
        
        
        public function showAction()
        {
            echo '<h3 style="color:red">'.__METHOD__.'</h3>';
            
            $params = $this->router->getParams();
            
            echo '<pre>';
                    print_r($params);
            echo '</pre>';
        
        }
        
        public function infoAction()
        {
             echo '<h3 style="color:red">'.__METHOD__.'</h3>';
             $book_name = $this->request->getQuery('book_name');
             $price     = $this->request->getQuery('price');
             echo 'Book Name : '.$book_name;
             echo '<hr>';
             echo 'Price : '.$price;
        }
        
        
        
        
        
    }