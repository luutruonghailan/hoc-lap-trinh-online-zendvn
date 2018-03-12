<?php
    namespace Multiphalcon\Chapter03\Controllers;
    use Multiphalcon\Vendor\Zendvn\Filter\AddLink;
use Multiphalcon\Vendor\Zendvn\Filter\Removecircumflex;
								class FilterController extends \Phalcon\Mvc\Controller
    {
        //string filter
        public function indexAction()
        {
            $input  = '<>@#string example123<<<>>>';
            $output = $this->filter->sanitize($input, 'string');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output:' .$output;
            // output : @#string example123
        }
        
        //string filter 02
        public function index1Action()
        {
            $input  = "<b><i>string example</i></b>";
            $output = $this->filter->sanitize($input, 'string');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output:' .$output;
            // output : string example
        }
        
        //email filter 03
        public function index3Action()
        {
            $input  = "zend2#@\gmail(.c(o)m";
            $output = $this->filter->sanitize($input, 'email');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output:' .$output;
            // output : zend2#@gmail.com;
        }
        
        //email filter 04
        public function index4Action()
        {
            $input  = "zend2!#$%&*+-/=?^_`{|}~@.[].\gmail(.c(o)m";
            $output = $this->filter->sanitize($input, 'email');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output:' .$output;
            // output : zend2!#$%&*+-=?^_`{|}~@.[].gmail.com
        }
        
        //int filter 05
        public function index5Action()
        {
            $input  = "@string12example34.6";
            $output = $this->filter->sanitize($input, 'int');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output:' .$output;
            // output : 12346
        }
        
        //int filter 06
        public function index6Action()
        {
            $input  = "@string12ex+am-p+le34.6";
            $output = $this->filter->sanitize($input, 'int');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output:' .$output;
            // output : 12+-+l346
        }
        
        //float filter 07
        public function index7Action()
        {
            $input  = "@string12example34.6";
            $output = $this->filter->sanitize($input, 'float');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output:' .$output;
            // output : 1234.6
        }
        
        //float filter 08
        public function index8Action()
        {
            $input  = "@str+ing12example3-4.6";
            $output = $this->filter->sanitize($input, 'float');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output:' .$output;
            // output : +123-4.6
        }
        
        //alphanum filter 08
        public function index9Action()
        {
            $input  = "@str+ing12example3-4.6";
            $output = $this->filter->sanitize($input, 'alphanum');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output:' .$output;
            // output : string12example346
        }
        
        //striptags filter 10
        public function index10Action()
        {
            $input  = "<>@#string example123<<<>>>";
            $output = $this->filter->sanitize($input, 'striptags');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output:' .$output;
            // output : @#string example123
        }
        
        //trim filter 11
        public function index11Action()
        {
            $input  = "      string example12        ";
            $output = $this->filter->sanitize($input, 'trim');
            echo 'Input : '.$input. " -length: ".strlen($input);
            echo '<hr>';
            echo 'Output: ' .$output. " -length: ".strlen($output);
            // output : string example12
        }
        
        //lower filter 12
        public function index12Action()
        {
            $input  = "sTring  ExAmPle 234";
            $output = $this->filter->sanitize($input, 'lower');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output: ' .$output;
            // output : string example 234
        }
        
        //upper filter 13
        public function index13Action()
        {
            $input  = "sTring  ExAmPle 234";
            $output = $this->filter->sanitize($input, 'upper');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output: ' .$output;
            // output : STRING EXAMPLE 234        
        }
        
        //filter in view 
        public function index14Action()
        {
           $this->view->name = 'Nguyen van A';
        }
        
        //custom filter 
        public function index15Action()
        {
            echo __FUNCTION__;
            //create custom filter 
            $this->filter->add('nhap', function ($input){
                return $input;
            });
            
            // call to use custom filter
                $input  = "xyz";
                $output = $this->filter->sanitize($input, 'nhap');
                echo 'Input : '.$input;
                echo '<hr>';
                echo 'Output: ' .$output;
        }
        
        //custom length5
        public function index16Action()
        {
           
            //create custom filter
            $this->filter->add('length5', function ($input){
                $length = strlen($input);
                if($length > 5)
                {
                    $input = substr($input, 0,5);
                }
                return $input;
            });
            
            
            //use custom filter
            $input = "Nguyen Van A";
            $output = $this->filter->sanitize($input, 'length5');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output : '.$output;
        }
        
        //custom standarstring
        public function index17Action()
        {
            
        }
        
        //custom addlink
        public function index18Action()
        {
           $this->filter->add('addlink', new AddLink(['keyword' => 'zendvn', 'link' => 'http://www.zend.vn']));
           
           $input  = "Zendvn trung tâm đào tạo lập trình chuyên nghiệp, zendVN luôn có các khóa học bổ ích";
           $output = $this->filter->sanitize($input, 'addlink');
           echo 'Input : '.$input;
           echo '<hr>';
           echo 'Output : '.$output;  
            
        }
        
        //custom addlink
        public function index19Action()
        {
            $this->filter->add('addlink', new AddLink(['keyword' => 'google', 'link' => 'http://www.google.vn']));
             
            $input  = "google is power";
            $output = $this->filter->sanitize($input, 'addlink');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output : '.$output;
        
        }
        
        //custom remove circumflex
        public function index20Action()
        {
            $this->filter->add('rmcircumflex', new \Multiphalcon\Vendor\Zendvn\Filter\RemoveCircumflex());
            $input = "zendvn là một trung tâm lập trình CHUYÊN Nghiệp";
            $output = $this->filter->sanitize($input, 'rmcircumflex');
            echo 'Input : '.$input;
            echo '<hr>';
            echo 'Output : '.$output;
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    }