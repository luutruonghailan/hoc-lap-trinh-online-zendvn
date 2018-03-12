<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
    <h1>index2.phtml</h1>
    
    <div>
        <?php $num1 = 100; ?>
        <?php $num2 = 20; ?>
    </div>
    
    <div>
       số 1 = <?php echo $num1; ?><br>
       số 2 = <?php echo $num2; ?>
    </div>
    
    <hr>
    <div>
       cộng =  <?php echo $num1 + $num2; ?><br> 
       trừ  =  <?php echo $num1 - $num2; ?><br> 
       nhân =  <?php echo $num1 * $num2; ?><br> 
       chia =  <?php echo $num1 / $num2; ?><br> 
       dư   =  <?php echo $num1 % $num2; ?><br> 
    </div>
    
</body>
</html>