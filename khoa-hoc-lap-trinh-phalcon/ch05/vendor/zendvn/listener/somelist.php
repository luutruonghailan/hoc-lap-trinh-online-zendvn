<?php
    namespace Multiphalcon\Vendor\Zendvn\Listener;
    class Somelist
    {
        public function beforeshow()
        {
             echo '<h3 style="color:red">before show info</h3>';
        }
        
        public function aftershow()
        {
            echo '<h3 style="color:red">after show info</h3>';
        }
    }