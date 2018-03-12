<?php
    namespace Multiphalcon\Vendor\Zendvn\Service;
    class UserService
    {
        protected $_facebook = 'default facebook';
        protected $_yahoo = 'default yahoo';
//         public function __construct($facebookA = 'default facebook', $yahooA = 'default yahoo')
//         {
//             $this->_facebook = $facebookA;
//             $this->_yahoo    = $yahooA;
//         }
        
        public function setFace($newFace)
        {
            $this->_facebook = $newFace;
        }
        
        public function showinfo()
        {
            echo __METHOD__;
        }
        
        public function properties()
        {
             echo '<h3 style="color:red">Facebook : '.$this->_facebook.'</h3>';
             echo '<h3 style="color:red">Yahoo : '.$this->_yahoo.'</h3>';
        }
    }