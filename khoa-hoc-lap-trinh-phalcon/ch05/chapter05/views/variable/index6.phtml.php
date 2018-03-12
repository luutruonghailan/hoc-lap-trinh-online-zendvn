<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
    <h1>index6.phtml</h1>
    
    <div>
       <?php $number = 10; ?>
       
       number = <?php echo $number; ?>
       
    </div>
    
   
    
    <hr>
    <div>
            <?php if ($number % 2 == 0) { ?>
                đây là số chẳn
            <?php } else { ?>
                đây là số lẽ
            <?php } ?>
       
    </div>
    
     <hr>
    <div>
            <?php echo (($number >= 0) ? 'đây là số dương' : 'đây là số âm'); ?>
       
    </div>
    
    <hr>
    <div>
            <?php if ($number > 10) { ?>
                đây là số lớn hơn 10
            <?php } elseif ($number < 10) { ?>
                đây là số nhỏ hơn 10
            <?php } else { ?>  
                đây là số 10  
            <?php } ?>
       
    </div>
    
</body>
</html>