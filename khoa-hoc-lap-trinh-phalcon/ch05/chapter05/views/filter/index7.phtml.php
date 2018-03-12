<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
   <?php $arr_example = array('peter' => 30, 'nam' => 20, 'mary' => 10, 'luna' => 60); ?>
   <?php $str_json = json_encode($arr_example); ?>
   <?php $arr_json = json_decode($str_json); ?>
   
  
   
    
   <b>arr_example</b><br> 
   <?php foreach ($arr_example as $key => $value) { ?>
        <?php echo $key; ?> -- <?php echo $value; ?><br>
   <?php } ?>
   <hr>
   
   <?php echo $str_json; ?>
   <hr>
   
    <b>arr_json</b><br> 
   <?php foreach ($arr_json as $key => $value) { ?>
        <?php echo $key; ?> -- <?php echo $value; ?><br>
   <?php } ?>
   <hr>
   
  
   
   
   
  
    
    
    
    
    
</body>
</html>