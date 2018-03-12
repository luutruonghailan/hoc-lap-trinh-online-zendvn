<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Data\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class SerializerController extends AbstractActionController
{
    public function index01Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	
    	$array	= array(
						'invokables'	=> array(
								'Data\Controller\Index'			=> 'Data\Controller\IndexController',
								'Data\Controller\Filter'		=> 'Data\Controller\FilterController',
								'Data\Controller\Serializer'	=> 'Data\Controller\SerializerController',
							));
    	
    	
    	//$serializer	= new \Zend\Serializer\Adapter\PhpSerialize();
    	$serializer	= \Zend\Serializer\Serializer::factory('PhpSerialize');
    	echo $str	= $serializer->serialize($array);
    	echo '<br />';
    	echo $str2	= serialize($array);
    	$obj		= $serializer->unserialize($str);
    	$obj2		= unserialize($str);
    	
    	echo '<pre style="color:red;font-weight:bold">';
    	print_r($obj2);
    	echo '</pre>';
    	
    	return false;
    }
    
    public function index02Action()
    {
    	echo '<h3 style="color:red;font-weight:bold">' . __METHOD__ . '</h3>';
    	 
    	$array	= array(
    			'invokables'	=> array(
    					'Data\Controller\Index'			=> 'Data\Controller\IndexController',
    					'Data\Controller\Filter'		=> 'Data\Controller\FilterController',
    					'Data\Controller\Serializer'	=> 'Data\Controller\SerializerController',
    			));
    	 
    	 
    	$serializer	= new \Zend\Serializer\Adapter\PhpCode();

    	echo $str	= $serializer->serialize($array);
    	echo '<br />';
    	
    	$obj		= $serializer->unserialize($str);

    	 
    	echo '<pre style="color:red;font-weight:bold">';
    	print_r($obj);
    	echo '</pre>';

    	 
    	return false;
    }
}
