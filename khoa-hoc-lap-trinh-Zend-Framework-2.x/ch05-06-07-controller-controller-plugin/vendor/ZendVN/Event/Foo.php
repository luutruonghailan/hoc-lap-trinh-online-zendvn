<?php
namespace ZendVN\Event;

use Zend\EventManager\EventManager;

use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\EventManagerAwareInterface;

class Foo implements EventManagerAwareInterface{
	
	protected $events;
	
	public function showInfo($name, $birthday){
		echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
		echo '<h3 style="color:red;font-weight:bold">showInfo - Doing</h3>';
		
		$params	= compact('name', 'birthday');
		$this->getEventManager()->trigger(__FUNCTION__, $this, $params);
	}

	public function setEventManager(EventManagerInterface $eventManager) {
		$eventManager->setIdentifiers(__CLASS__);
		$this->events	= $eventManager;
		return $this;
	}

	public function getEventManager() {
		if(!$this->events) {
			$this->setEventManager(new EventManager(__CLASS__));
		}
		
		return $this->events;
	}

}