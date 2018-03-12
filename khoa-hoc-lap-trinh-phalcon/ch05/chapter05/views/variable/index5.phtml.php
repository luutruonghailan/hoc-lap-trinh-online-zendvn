<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
    <h1>index5.phtml</h1>
    
    <div>
       <?php $x = 20; ?>
       <?php $y = 15; ?>
       input : x = <?php echo $x; ?> ||| y = <?php echo $y; ?>
       
    </div>
    
   
    
    <hr>
    <div>
        (x > 1 and y > 5) : <?php echo $x > 1 && $y > 5; ?><br>        
        (x > 1 or y < 5)  : <?php echo $x > 1 || $y > 5; ?><br>         
        (not 0)           : <?php echo !0; ?><br>                 
       
       
       
    </div>
    
</body>
</html>