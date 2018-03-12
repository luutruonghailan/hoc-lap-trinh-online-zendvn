<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
    <b>Filter striptags : </b>
    <?php echo strip_tags('<div><b><i>This is filter striptags</i></b></div>'); ?>   
    <hr>
    
    <b>Filter slashes : </b>
    <?php echo addslashes(' this \'is fi\'lter sl\ashes '); ?>                    
    <hr>
    
    <b>Filter stripslashes : </b>
        <?php echo stripslashes(addslashes(' this \'is fi\'lter sl\ashes ')); ?>          
    <hr>
    
    <b>Filter capitalize : </b>
        <?php echo ucwords(' this is filter capitalize '); ?>         
    <hr>
    
     <b>Filter lower : </b>
        <?php echo Phalcon\Text::lower('thIs is fiLTEr lowEr'); ?>         
    <hr>
    
    <b>Filter upper : </b>
        <?php echo Phalcon\Text::upper('thIs is fiLTEr UppEr'); ?>         
    <hr>
    
    <b>Filter length : </b>
        <?php echo $this->length('this is filter length'); ?>         
    <hr>
    
    <b>Filter abs : </b>
        <?php echo abs((-123)); ?>                           
    <hr>
    
    <b>Filter trim : </b><br>
        input :  <?php echo '   hello   '; ?>   -- length : <?php echo $this->length('   hello   '); ?><br> 
        output : <?php echo '   hello   '; ?>   -- length : <?php echo $this->length(trim('   hello   ')); ?>      
    <hr>
    
    <b>Filter left_trim : </b><br>
        input :  <?php echo '   hello   '; ?>   -- length : <?php echo $this->length('   hello   '); ?><br> 
        output : <?php echo '   hello   '; ?>   -- length : <?php echo $this->length(ltrim('   hello   ')); ?>      
    <hr>
    
    <b>Filter right_trim : </b><br>
        input :  <?php echo '   hello   '; ?>   -- length : <?php echo $this->length('   hello   '); ?><br> 
        output : <?php echo '   hello   '; ?>   -- length : <?php echo $this->length(rtrim('   hello   ')); ?>      
    <hr>
    
    <b>Filter convert_encoding : </b><br>
        input  :  <?php echo 'xin chào '; ?><br> 
        output :  <?php echo $this->convertEncoding('xin chào ', 'bakfal', 'utf8'); ?><br>       
    <hr>
    
    
    
    
    
</body>
</html>