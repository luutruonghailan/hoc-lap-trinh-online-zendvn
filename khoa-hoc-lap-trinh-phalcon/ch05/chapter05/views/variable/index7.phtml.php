<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
    <h1>index7.phtml</h1>
    
    <div>
        <?php $var1 = 0; ?>
        var1 = <?php echo $var1; ?><br>
        <b>Check empty: </b>
        <?php if (empty($var1)) { ?>
            đây là một biến rỗng
        <?php } else { ?>    
            đây không là một biến rỗng
        <?php } ?> 
            
            
    </div>
    <hr>
    <div>
        <?php $var2 = 'abc'; ?>
        var2 = <?php echo $var2; ?><br>
        <b>Check defined: </b>
        <?php if (isset($var22)) { ?>
            variable is defined
        <?php } else { ?>    
            not defined
        <?php } ?> 
            
            
    </div>
    
    <hr>
    <div>
        <?php $var3 = 10; ?>
        var3 = <?php echo $var3; ?><br>
        <b>Check even - odd: </b>
        <?php if (((($var3) % 2) == 0)) { ?>
            đây là số chẵn
        <?php } elseif (((($var3) % 2) != 0)) { ?>    
           đây là số lẻ
        <?php } ?> 
            
            
    </div>
    
    <hr>
    <div>
        <?php $var4 = 'abc10'; ?>
        var4 = <?php echo $var4; ?><br>
        <b>Check numeric </b>
        <?php if (is_numeric($var4)) { ?>
            đây là một số
        <?php } else { ?>    
           đây không là một số
        <?php } ?> 
            
            
    </div>
    
     <hr>
    <div>
        <?php $var5 = 'hellos'; ?>
        var5 = <?php echo $var5; ?><br>
        <b>Check sameas </b>
        <?php if (($var5) === ('hello')) { ?>
            same value
        <?php } else { ?>    
           not same value
        <?php } ?> 
            
            
    </div>
    
     <hr>
    <div>
        <?php $var6 = true; ?>
        var6 = <?php echo $var6; ?><br>
        <b>Check type </b>
        <?php if (gettype($var6) === ('string')) { ?>
            đây là định dạng kiểu chuỗi
        <?php } elseif (gettype($var6) === ('boolean')) { ?>    
           đây là định dạng kiểu logic
        <?php } elseif (gettype($var6) === ('integer')) { ?>    
           đây là định dạng kiểu số nguyên
        <?php } ?> 
            
            
    </div>
    
     <hr>
    <div>
        <?php $var7 = array(); ?>
        var7 = <?php echo $var7; ?><br>
        <b>Check scalar </b>
        <?php if (is_scalar($var7)) { ?>
            đây là định dạng thuộc về tập hợp kiểu chuỗi, kiểu số nguyên, kiểu số thập phân, kiểu logic
        <?php } else { ?>    
           đây không là định dạng kiểu scalar
        
        <?php } ?> 
            
            
    </div>
    
   
    
</body>
</html>