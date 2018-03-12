<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
    <h1>index3.phtml</h1>
    
    <div>
        <?php $x = 5; ?>
        <?php $x += 5; ?> 
        
        <?php $y = 25; ?>
        <?php $y -= 10; ?> 
        
        <?php $z = 20; ?>
        <?php $z *= 10; ?> 
        
        <?php $t = 100; ?>
        <?php $t /= 10; ?> 
        
        <?php $w = 5; ?>
        <?php $w = $w % 2; ?> 
    </div>
    
   
    
    <hr>
    <div>
        x = <?php echo $x; ?><br> 
        y = <?php echo $y; ?><br> 
        z = <?php echo $z; ?><br> 
        t = <?php echo $t; ?><br> 
        w = <?php echo $w; ?><br> 
    </div>
    
</body>
</html>