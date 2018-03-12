<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
   <?php $arr_sort = array('peter' => 30, 'nam' => 20, 'mary' => 10, 'luna' => 60); ?>
   <?php $arr_sort2 = $this->sort($arr_sort); ?>
    
   <b>Before sort</b><br> 
   <?php foreach ($arr_sort as $key => $value) { ?>
        <?php echo $key; ?> -- <?php echo $value; ?><br>
   <?php } ?>
   <hr>
   
   <b>After sort</b><br> 
   <?php foreach ($arr_sort2 as $key => $value) { ?>
        <?php echo $key; ?> -- <?php echo $value; ?><br>
   <?php } ?>
    
    
    
    
    
</body>
</html>