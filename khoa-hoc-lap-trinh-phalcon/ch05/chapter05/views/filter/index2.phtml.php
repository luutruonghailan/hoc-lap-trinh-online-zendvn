<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
    <b>Filter default : </b>
        <?php $var_default = (empty('abc') ? ('default value') : ('abc')); ?>
        var_default : <?php echo $var_default; ?>
    <hr>
    
     <b>Filter format : </b>
       <?php echo sprintf('his name is %s, he is %d years old', 'peter', 20); ?>     
       
    <hr>
    
    <b>Filter url_encode : </b>
       <?php echo urlencode('điện thoại di động'); ?>     
       
    <hr>
    
   
    
    
    
    
    
</body>
</html>