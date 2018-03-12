<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
   <?php $arr_join = array('peter' => 30, 'nam' => 20, 'mary' => 10, 'luna' => 60); ?>
   <?php $str_join = join($arr_join, ' '); ?>
   
  
   
    
   <b>Before filter join</b><br> 
   <?php foreach ($arr_join as $key => $value) { ?>
        <?php echo $key; ?> -- <?php echo $value; ?><br>
   <?php } ?>
   <hr>
   
   <?php echo $str_join; ?>
   
   
   
  
    
    
    
    
    
</body>
</html>