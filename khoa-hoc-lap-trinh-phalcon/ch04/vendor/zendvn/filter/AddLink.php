<?php
    namespace Multiphalcon\Vendor\Zendvn\Filter;
    class AddLink
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
        
        // Zendvn trung tÃ¢m Ä‘Ã o táº¡o láº­p trÃ¬nh chuyÃªn nghiá»‡p, zendVN luÃ´n cÃ³ cÃ¡c khÃ³a há»�c bá»• Ã­ch 
        //Zendvn => '<a href="http://www.zend.vn">Zend VN</a>'
    }