<?php

namespace Mvc;

use Zend\ServiceManager\ServiceManager;

use Zend\EventManager\SharedEventManager;

use Zend\Mvc\MvcEvent;
use Zend\Mvc\ModuleRouteListener;

class Module
{
	public function getServiceConfig(){
		return array(
				'invokables' 		=> array(),		// done		đăng ký 1 dịch vụ là 1 thể hiện của một lớp 
				'factories' 		=> array(		// đăng ký 1 dịch vụ là 1 thể hiện của một lớp (lớp phụ thuộc nhiều lớp khác)
					'userservice' 	=> function($sm){
						$fbService		= $sm->get('Mvc\Service\Facebook');
						$mailService	= new \Mvc\Service\MailService();
						$userService	= new \Mvc\Service\UserService($fbService, $mailService);
						return $userService;
					},
				),		
				'abstract_factories'=> array(),		// done		trường hợp dự phòng khi tên dịch vụ chưa được khai báo
				'aliases' 			=> array(),		// done		đặt tên mới cho dịch vụ đã tồn tại
				'services' 			=> array(),		// done		đăng ký 1 dịch vụ ứng với một đối tượng
				'initializers' 		=> array(		// done		định nghĩa hành động khi các dịch vụ được gọi
// 					function($instance, $sm){		
// 						if($instance instanceof \Mvc\Service\UserService){
// 							$instance->setFacebook('www.zend.vn/forum');
// 						}
// 					},
						
				),	
				'shared' 			=> array(),		// done		chia sẻ dịch vụ
		);
	}
	
	/*
	 * application.config.php
	 * module.config.php			(Theo thứ tự của module được khai báo)	khai báo phần service được sử dụng trong module của mình
	 * getServiceConfig 			định nghía các anonymus function
	 * cấu hình trong /config/autoload
	 */
	
	public function onBootstrap(MvcEvent $e)
	{		
		$serviceManager		= $e->getApplication()->getServiceManager();
		
// 		 $sm	= new ServiceManager();
//  		 $sm->setShared($name, $isShared)
		
		$userService	= $serviceManager->get('userservice');
		
		echo '<pre style="color:red;font-weight:bold">';
		print_r($userService);
		echo '</pre>';

		// $eventManager       = $e->getApplication()->getEventManager();
		// $moduleRouteListener = new ModuleRouteListener();
		// $moduleRouteListener->attach($eventManager);
		// $eventManager->attach(new \ZendVN\Event\ShowInfoListener());
	}
	
    public function getConfig()
    {
    	//echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
    	//echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

}
