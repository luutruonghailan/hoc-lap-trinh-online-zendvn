
    Content : 
    <?php echo $this->getContent(); ?>
    <hr>
    
    Get_content :
    <?php echo $this->getContent(); ?>
    <hr>
    
    Time :
    <?php echo time(); ?>
    <hr>
    
    date :
    <?php echo date('d-m-y', time()); ?>
    <hr>
    
    Version: 
    <?php echo Phalcon\Version::get(); ?>
    <hr>
    
    Constant: <br>
    APPLICATION_PATH : <?php echo constant('APPLICATION_PATH'); ?>
    <hr>
    
    <?php $var = 'vardump'; ?>
    Dump: <?php echo var_dump($var); ?>
    <hr>
    
    Url:
    <a href="<?php echo $this->url->get('chapter05/function/index2'); ?>">url-function</a>