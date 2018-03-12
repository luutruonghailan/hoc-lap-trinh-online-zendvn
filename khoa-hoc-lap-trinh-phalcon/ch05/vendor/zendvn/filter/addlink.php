<?php
    namespace Multiphalcon\Vendor\Zendvn\Filter;
    class Addlink
    {
        public $param = [
            'keyword'   => null,
            'link'      => null  
        ];
        
        public function __construct($option)
        {
            $this->param['keyword']  = $option['keyword'];
            $this->param['link']     = $option['link'];
        }
        
        public function filter($input)
        {
            $pattern        = '#'.$this->param['keyword'].'#imSU';
            $replacement    = '<a href="'.$this->param['link'].'">'.$this->param['keyword'].'</a>';
            $output = preg_replace($pattern, $replacement, $input);
            
            return $output;
        }
        
        // Zendvn trung tâm đào tạo lập trình chuyên nghiệp, zendVN luôn có các khóa học bổ ích 
        //Zendvn => '<a href="http://www.zend.vn">Zend VN</a>'
    }