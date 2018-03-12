<?php
    namespace Multiphalcon\Vendor\Zendvn\Event;
    use Phalcon\Events\EventsAwareInterface;
	class Event01 implements EventsAwareInterface
    {
        protected $_eventmanager;
        public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager )
        {
            $this->_eventmanager = $eventsManager;
        }
        
       
        public function getEventsManager()
        {
            return $this->_eventmanager;
        }
        
        public function showinfo()
        {
            $this->_eventmanager->fire('abc:beforeshow', $this);
            echo '<h1>content of showinfo</h1>';
            $this->_eventmanager->fire('abc:aftershow', $this);
        }
    }