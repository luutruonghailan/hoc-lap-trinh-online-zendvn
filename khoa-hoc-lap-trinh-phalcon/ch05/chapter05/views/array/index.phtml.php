<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
        <h1>index.phtml</h1>
        <?php $colors = array('red' => 'màu đỏ', 'green' => 'màu xanh lá', 'blue' => 'màu xanh dương'); ?>
        
        <div>
            red     = <?php echo $colors['red']; ?><br>
            green   = <?php echo $colors['green']; ?><br>
            blue    = <?php echo $colors['blue']; ?><br>
        </div>
</body>
</html>