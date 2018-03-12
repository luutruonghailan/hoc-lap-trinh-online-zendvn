<?php
    namespace Multiphalcon\Vendor\Zendvn\Helper;
    use Phalcon\Tag;
	class Zendhelper extends Tag
	{
	    //echo $this->tag->getTitle();
	    public function hello($name)
	    {
	        echo 'hello '.$name;
	    }
	    
	    public function welcome($name)
	    {
	        echo 'welcome '.$name;
	    }
	}