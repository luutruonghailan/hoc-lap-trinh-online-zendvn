<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Data\Controller;

use Zend\Filter\StaticFilter;

use Zend\Filter\Word\DashToCamelCase;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\I18n\Filter as ZIFilter;
use Zend\Filter as ZFilter;

class FilterController extends AbstractActionController
{
	// \Zend\I18n\Filter\Alnum()	trích xuất các giá trị chuỗi từ a->z A->Z và các giá trị số
    public function index01Action()
    {
    	// $filter	= new \Zend\I18n\Filter\Alnum();
    	$filter	= new ZIFilter\Alnum(true);
    	$input	= 'abc !@#$^&*( dec 12 ()*() 12';
    	$output	= $filter->filter($input);
    	
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">\Zend\I18n\Filter\Alnum()</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
		
    	return false;
    }
    
    // \Zend\I18n\Filter\Alpha()	trích xuất các giá trị chuỗi từ a->z A->Z
    public function index02Action()
    {
    	$filter	= new ZIFilter\Alpha(true);
    	$input	= 'abc DEF!@#$^&*( dec 12 ()*() 12';
    	$output	= $filter->filter($input);
    	 
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">\Zend\I18n\Filter\Alpha</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // \Zend\Filter\BaseName()
    public function index03Action()
    {
    	$filter	= new ZFilter\BaseName();
    	$input	= 'www.zend.vn/public/test.html';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">\Zend\Filter\BaseName</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // \Zend\Filter\Dir()
    public function index04Action()
    {
    	$filter	= new ZFilter\Dir();
    	$input	= 'www.zend.vn/public/test.html';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">\Zend\Filter\Dir</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // \Zend\Filter\Callback()
    public function index05Action()
    {
    	$filter	= new ZFilter\Callback('strrev');
    	$input	= 'Zend Framework is not difficult';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">\Zend\Filter\Callback</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }
	
    // \Zend\Filter\Digits()
    public function index06Action()
    {
    	$filter	= new ZFilter\Digits();
    	$input	= 'abc !@#$^&*( dec 12 ()*() 12';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">\Zend\Filter\Digits</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // \Zend\Filter\StringToLower()
    public function index07Action()
    {
    	// M1: $filter	= new ZFilter\StringToLower('UTF-8');
    	// M2 $filter	= new ZFilter\StringToLower(array('encoding' => 'UTF-8'));
    	
    	$filter	= new ZFilter\StringToLower();
    	$filter->setEncoding('UTF-8');
    	
    	$input	= 'Khóa học lập trường Zend Framework 2';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">\Zend\Filter\StringToLower</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // \Zend\Filter\StringToUpper()
    public function index08Action()
    {
    	$filter	= new ZFilter\StringToUpper();
    	$filter->setEncoding('UTF-8');
    	 
    	$input	= 'Khóa học lập trường Zend Framework 2';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">\Zend\Filter\StringToUpper</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // \Zend\Filter\StringTrim()
    public function index09Action()
    {
    	$filter	= new ZFilter\StringTrim();
    
    	$input	= '    Zend       Framework 2         ';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">\Zend\Filter\StringTrim</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // \Zend\Filter\StripTags()
    public function index10Action()
    {
    	$filter	= new ZFilter\StripTags();
    
    	$input	= '<h3>Khóa học lập trình <a href="www.zend.vn">Zend Framework 2</a></h3>';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">\Zend\Filter\StripTags</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }
	
    // \Zend\Filter\Compress()
    public function index11Action()
    {
    	$options= array(
    					'adapter' 	=> 'zip',
    					'options'	=> array('archive' => PUBLIC_PATH . '/tmp/compress.zip'),
    				);
    	$filter	= new ZFilter\Compress($options);
    
    	$input	= PUBLIC_PATH . '/tmp/module.config.ini';
    	$input	= PUBLIC_PATH . '/tmp/Koala.jpg';
    	$input	= PUBLIC_PATH . '/tmp/fonts';
    	$output	= $filter->filter($input);
    
    	return false;
    }
	
    // \Zend\Filter\DeCompress()
    public function index12Action()
    {
    	$options= array(
    			'adapter' 	=> 'zip',
    			'options'	=> array('target' => PUBLIC_PATH . '/tmp/unzip'),
    	);
    	$filter	= new ZFilter\Decompress($options);
    
    	$input	= PUBLIC_PATH . '/tmp/compress.zip';

    	$output	= $filter->filter($input);
    
    	return false;
    }
 
    // \Zend\Filter\HtmlEntities()
    public function index13Action()
    {
    	$filter	= new ZFilter\HtmlEntities();
    
    	$input	= 'Zend Framework 2 & <>';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">\Zend\Filter\HtmlEntities</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }
    
    // \Zend\Filter\PregReplace()
    public function index14Action()
    {
//     	$filter	= new ZFilter\PregReplace();
//     	$filter->setPattern('#[0-9]#');
//     	$filter->setReplacement('X');
    	
    	$options= array(
    				'pattern'		=> '#[0-9]#',
    				'replacement'	=> 'X'
    				);
    	$filter	= new ZFilter\PregReplace($options);
    	$input	= 'abc 123 gh 4 hnkkoh';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">\Zend\Filter\PregReplace</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // ZFilter\Word\CamelCaseToDash		ZendFrameworkisEasy	Zend-Frameworkis-Easy
    public function index15Action()
    {

    	$filter	= new ZFilter\Word\CamelCaseToDash();
    	$input	= 'ZendFrameworkisEasy';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">ZFilter\Word\CamelCaseToDash</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // ZFilter\Word\CamelCaseToUnderscore		ZendFrameworkisEasy	Zend_Frameworkis_Easy
    public function index16Action()
    {
    
    	$filter	= new ZFilter\Word\CamelCaseToUnderscore();
    	$input	= 'ZendFrameworkisEasy';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">ZFilter\Word\CamelCaseToDash</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // ZFilter\Word\CamelCaseToSeparator		ZendFrameworkisEasy	Zend Frameworkis Easy
    public function index17Action()
    {
    
    	$filter	= new ZFilter\Word\CamelCaseToSeparator('++');
    	$input	= 'ZendFrameworkisEasy';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">ZFilter\Word\CamelCaseToSeparator</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // ZFilter\Word\DashToUnderscore		ZendFrameworkisEasy	Zend Frameworkis Easy
    public function index18Action()
    {
    
    	$filter	= new ZFilter\Word\DashToUnderscore();
    	$input	= 'Zend-Framework-is-Easy';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">ZFilter\Word\DashToUnderscore</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // ZFilter\Word\DashToUnderscore		ZendFrameworkisEasy	Zend Frameworkis Easy
    public function index19Action()
    {
    
    	$filter	= new ZFilter\Word\DashToCamelCase();
    	$input	= 'Zend-framework-is-Easy';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">ZFilter\Word\DashToCamelCase</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // ZFilter\Word\DashToSeparator		ZendFrameworkisEasy	Zend Frameworkis Easy
    public function index20Action()
    {
    
    	$filter	= new ZFilter\Word\DashToSeparator('+');
    	$input	= 'Zend-framework-is-Easy';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">ZFilter\Word\DashToSeparator</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // ZFilter\Word\SeparatorToCamelCase		ZendFrameworkisEasy	Zend Frameworkis Easy
    public function index21Action()
    {
    
    	$filter	= new ZFilter\Word\SeparatorToCamelCase('-');
    	$input	= 'Zend-framework-is-Easy';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">ZFilter\Word\SeparatorToCamelCase</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }
    
    // ZFilter\Word\SeparatorToCamelCase		ZendFrameworkisEasy	Zend Frameworkis Easy
    public function index22Action()
    {
    
    	$filter	= new ZFilter\Word\SeparatorToDash(':');
    	$input	= 'Zend:framework:is-Easy';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">ZFilter\Word\SeparatorToDash</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // ZFilter\Word\SeparatorToCamelCase		ZendFrameworkisEasy	Zend Frameworkis Easy
    public function index23Action()
    {
    
    	$filter	= new ZFilter\Word\SeparatorToSeparator(':','+++++');
    	$input	= 'Zend:framework:is-Easy';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">ZFilter\Word\SeparatorToDash</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }
	
    // ZFilter\Word\UnderscoreToCamelCase		ZendFrameworkisEasy	Zend Frameworkis Easy
    public function index24Action()
    {
    
    	$filter	= new ZFilter\Word\UnderscoreToCamelCase();
    	$input	= 'Zend_framework_is-Easy';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">ZFilter\Word\UnderscoreToCamelCase</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // ZFilter\Word\UnderscoreToDash		ZendFrameworkisEasy	Zend Frameworkis Easy
    public function index25Action()
    {
    
    	$filter	= new ZFilter\Word\UnderscoreToDash();
    	$input	= 'Zend_framework_is-Easy';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">ZFilter\Word\UnderscoreToDash</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }

    // ZFilter\Word\UnderscoreToSeparator		ZendFrameworkisEasy	Zend Frameworkis Easy
    public function index26Action()
    {
    
    	$filter	= new ZFilter\Word\UnderscoreToSeparator('++++++');
    	$input	= 'Zend_framework_is-Easy';
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">ZFilter\Word\UnderscoreToSeparator</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }
    
    public function index27Action()
    {
    	
    	$input	= 'abc 12 def 3';
    	$output	= StaticFilter::execute($input, 'PregReplace', array(
    																'pattern'	=> '#[0-9]#',
    																'replacement'	=> 'X'
    																));
    	
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">ZFilter\Word\UnderscoreToSeparator</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }
    
    public function index28Action()
    {
    	 
    	$input			= '     zend_framework_is_not_diffucult        ';
    	$filterChain	= new ZFilter\FilterChain();
    	$filterChain->attach(new ZFilter\StringToUpper())
    				->attach(new ZFilter\StringTrim())
    				->attach(new ZFilter\Word\UnderscoreToDash());
    	$output	= $filterChain->filter($input);
    	
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }
    
    public function index29Action()
    {
    
    	$input			= '     zend_framework_is_not_diffucult        ';
    	$filterChain	= new ZFilter\FilterChain();
    	$filterChain->attachByName('StringToUpper')
    				->attachByName('StringTrim')
    				->attachByName('Word\UnderscoreToDash');
    	$output	= $filterChain->filter($input);
    	 
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }
    
    public function index30Action()
    {
    	$input	= 'Khóa học lập trình Zend Framework cung cấp những kiến thức căn bản và chuyên sâu về Zend Framework';
    	$options= array('word' => 'Zend Framework','link' => 'www.zend.vn');
    	$filter	= new \ZendVN\Filter\AddLink($options);
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }
    
    public function index31Action()
    {
    	$input	= 'Khóa học lập trình Zend Framework cung cấp những kiến thức căn bản và CHUYÊN SÂU VỀ Zend Framework';
    	$filter	= new \ZendVN\Filter\RemoveCircumflex();
    	$output	= $filter->filter($input);
    
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$output.'</h3>';
    
    	return false;
    }
    
    public function index32Action()
    {
    	$input	= 'http://www.zend.vn/   Khóa        học    lập trình Zend Framework !@#$%^&*()_+ cung cấp những kiến thức căn bản và chuyên sâu về Zend Framework';

    	$newArr	= explode('vn/', $input);
    	
    	$filter = new \ZendVN\Filter\CreateURLFriendly();
    	
    	$output	= $filter->filter($newArr[1]);
    
    	$result	= $newArr[0] . 'vn/' . $output . '.html';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$result.'</h3>';
    
    	return false;
    }
    
    public function index33Action()
    {
    	$input	= 'http://www.zend.vn/   Khóa        học    lập trình Zend Framework !@#$%^&*()_+ cung cấp những kiến thức căn bản và chuyên sâu về Zend Framework';
    
    	$newArr	= explode('vn/', $input);
    	 
    	StaticFilter::getPluginManager()->setInvokableClass('CreateURLFriendly', '\ZendVN\Filter\CreateURLFriendly');

    	$output	= StaticFilter::execute($newArr[1], 'CreateURLFriendly');
    
    	$result	= $newArr[0] . 'vn/' . $output . '.html';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$result.'</h3>';
    
    	return false;
    }
    
    public function index34Action()
    {
    	$input	= 'http://www.zend.vn/   Khóa        học    lập trình Zend Framework !@#$%^&*()_+ cung cấp những kiến thức căn bản và chuyên sâu về Zend Framework';
    
    	$newArr	= explode('vn/', $input);
    
    	$output	= StaticFilter::execute($newArr[1], 'RemoveCircumflex');
    
    	$result	= $newArr[0] . 'vn/' . $output . '.html';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Input: '.$input.'</h3>';
    	echo '<h3 style="color:red;font-weight:bold;margin-left:50px">Output: '.$result.'</h3>';
    
    	return false;
    }

}
