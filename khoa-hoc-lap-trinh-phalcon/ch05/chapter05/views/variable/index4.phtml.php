<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
    <h1>index4.phtml</h1>
    
    <div>
       <?php $x = 30; ?>
       <?php $y = 10; ?>
    </div>
    
   
    
    <hr>
    <div>
        x > y :    <?php echo $x > $y; ?><br>
        x < y :    <?php echo $x < $y; ?><br>
        x <> y :   <?php echo $x != $y; ?><br>
        x != y :   <?php echo $x != $y; ?><br>
        x == y :   <?php echo $x == $y; ?><br>
        x === y :  <?php echo $x === $y; ?><br>
        x !== y :  <?php echo $x !== $y; ?><br>
         x <= y :  <?php echo $x <= $y; ?><br>
         x >= y :  <?php echo $x >= $y; ?><br>
       
    </div>
    
</body>
</html>