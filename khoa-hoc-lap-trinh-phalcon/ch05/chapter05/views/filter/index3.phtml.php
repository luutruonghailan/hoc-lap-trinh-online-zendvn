<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
    <b>Filter length array : </b>
        <?php $var_length = range(1, 10); ?>
        
    <hr>
    
    <?php foreach ($var_length as $key => $value) { ?>
        <?php echo $key; ?> -- <?php echo $value; ?><br>
    <?php } ?>
    
    <hr>
    Số phần tử : <?php echo $this->length($var_length); ?>
    
   
    
    
    
    
    
</body>
</html>