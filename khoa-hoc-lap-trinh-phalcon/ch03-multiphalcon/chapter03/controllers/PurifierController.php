<?php
    namespace Multiphalcon\Chapter03\Controllers;
    use Multiphalcon\Vendor\Zendvn\Filter\Purifier;
				class PurifierController extends \Phalcon\Mvc\Controller
    {
        //Thiết lập các thẻ html được cho phép hiển thị
        public function indexAction()
        {
            $config =  \HTMLPurifier_Config::createDefault();
            $config->set('HTML.AllowedElements', 'h2,h3,div,p,h1');
            $purifier = new \HTMLPurifier_HTMLPurifier($config);
            
            $input  = '<h1>wellcome purifier</h1>';
            $output = $purifier->purify($input);
           
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output : '.$output;
            //Output : <h1>wellcome purifier</h1>
        }
        
        //Thiết lập các class được cho phép hiển thị ở chuỗi output
        public function index2Action()
        {
            $config =  \HTMLPurifier_Config::createDefault();
            //$config->set('Attr.AllowedClasses', ['header','footer','content']);
            
            //Cho phép tất cả các class được hiển thị trong chuỗi output
            $config->set('Attr.AllowedClasses', null);
            $purifier = new \HTMLPurifier_HTMLPurifier($config);
        
            $input  = '<div class="content">This is content</div> <div class="header"> This is header</div>';
            $output = $purifier->purify($input);
             
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output : '.$output;
            //Output : <div class="content">This is content</div> <div class="header"> This is header</div>
        }
        
        //filter cho id
        public function index3Action()
        {
            $config =  \HTMLPurifier_Config::createDefault();
            //Không cho phép hiện id trong chuỗi output
            //$config->set('Attr.EnableID', false);
            
            //Cho phép hiển thị id trong chuỗi output
            $config->set('Attr.EnableID', true);
            
            //Cấm một số id nằm trong một danh sách
           // $config->set('Attr.IDBlacklist', ['low','main']);
            
            //Thêm phần tiền tố cho một id
            $config->set('Attr.IDPrefix', 'zendvn_');
            
            
            $purifier = new \HTMLPurifier_HTMLPurifier($config);
        
            $input  = '<div id="sub">sub id</div> <div id="main">main id</div>';
            $output = $purifier->purify($input);
             
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output : '.$output;
            
            //output : <div id="zendvn_sub">sub id</div> <div id="zendvn_main">main id</div>
           
        }
        
        //thiết lập alt mặc định cho một thẻ image
        public function index4Action()
        {
            $config =  \HTMLPurifier_Config::createDefault();
            
            $config->set('Attr.DefaultImageAlt', 'alt for image');
        
           
        
        
            $purifier = new \HTMLPurifier_HTMLPurifier($config);
        
            $input  = '<img src="image/abc.png">';
            $output = $purifier->purify($input);
             
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output : '.$output;
        
            //output : <img src="image/abc.png" alt="alt for image">
              
        }
        
        //filter autoformat link uri
        public function index5Action()
        {
            $config =  \HTMLPurifier_Config::createDefault();
        
            //$config->set('AutoFormat.DisplayLinkURI', false);
            $config->set('AutoFormat.DisplayLinkURI', true);
  
            $purifier = new \HTMLPurifier_HTMLPurifier($config);
        
            $input  = '<a href="www.zend.vn">Zendvn</a>';
            $output = $purifier->purify($input);
             
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output : '.$output;
        
            //output : <a href="www.zend.vn">Zendvn</a>
        
        }
        
        //xóa đi các thẻ html rỗng
        public function index6Action()
        {
            $config =  \HTMLPurifier_Config::createDefault();
        
            
            //$config->set('AutoFormat.RemoveEmpty', true);
            $config->set('AutoFormat.RemoveEmpty', false);
            $purifier = new \HTMLPurifier_HTMLPurifier($config);
        
            $input  = '<h1>h1 content</h1><h2></h2>';
            $output = $purifier->purify($input);
             
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output : '.$output;
        
            //output : <h1>h1 content</h1>
        
        }
        
        
        //Thiết lập các thuộc tính được phép hiển thị ở chuỗi output
        public function index7Action()
        {
            
            $config =  \HTMLPurifier_Config::createDefault();
        
        
           
            $config->set('HTML.AllowedAttributes', ['class','style']);
            $purifier = new \HTMLPurifier_HTMLPurifier($config);
        
            $input  = '<div style="color:green;" class="abc">allow attributes</div>';
            $output = $purifier->purify($input);
             
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output : '.$output;
        
            //output : <div  style="color:green;" class="abc">allow attributes</div>
        
        }
        
        //Xây dựng html purifier thành một filter trong phalcon framework
        public function index8Action()
        {
            //Tạo ra custome filter - purifier.php
            //Đăng ký autoload cho tập tin purifier.php
            //$config->set('Attr.AllowedClasses', ['header','footer','content']);
            error_reporting(1);
            @ini_set('display_errors', 1);
            
            $arrConfig = [
                'Attr.AllowedClasses',
                ['header','footer','content']
            ];
            $this->filter->add('zendvn-purifier', new Purifier($arrConfig));
            
            $input = '<h1 class="purifier">zendvn-purifier</h1> <div class="content">Content</div>';
            $output = $this->filter->sanitize($input, 'zendvn-purifier');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output : '.$output;
            
            //output : <h1>zendvn-purifier</h1> <div class="content">Content</div>
            
        
        }
        
        //Xây dựng html purifier thành một filter trong phalcon framework
        public function index9Action()
        {
            $arrConfig = [
                'HTML.AllowedElements',
                'h2,h3,div,p'
            ];
            $this->filter->add('zendvn-purifier-index9', new Purifier($arrConfig));

            $input  = '<h1>wellcome purifier</h1>';
            $output = $this->filter->sanitize($input, 'zendvn-purifier-index9');
             
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output : '.$output;
            //Output : wellcome purifier
        
        }
        
     
        
        
        
        
        
        
      
        
        
        
        
        
        
        
        
    }