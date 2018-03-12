<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
        <h1>index3.phtml</h1>
        <?php $arr = range(0, 100); ?>
        
        <div>
             <?php foreach ($arr as $key => $value) { ?>
                 <?php if ($key > 10) { ?>
                    <?php break; ?>
                 <?php } ?>
                 
                 <?php if ($key % 2 != 0) { ?>
                    <?php continue; ?>
                 <?php } ?>
                 
                 
                    <?php echo $key; ?>   --  <?php echo $value; ?><br>
             <?php } ?>
        </div>
        
        
        
</body>
</html>