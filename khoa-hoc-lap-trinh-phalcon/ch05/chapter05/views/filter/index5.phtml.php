<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
   <?php $arr_keys = array('peter' => 30, 'nam' => 20, 'mary' => 10, 'luna' => 60); ?>
   <?php $arr_keys2 = array_keys($arr_keys); ?>
   
    
   <b>Before filter keys</b><br> 
   <?php foreach ($arr_keys as $key => $value) { ?>
        <?php echo $key; ?> -- <?php echo $value; ?><br>
   <?php } ?>
   <hr>
   
   <b>After filter keys</b><br> 
   <?php foreach ($arr_keys2 as $key => $value) { ?>
        <?php echo $key; ?> -- <?php echo $value; ?><br>
   <?php } ?>
   <hr>
   
  
    
    
    
    
    
</body>
</html>