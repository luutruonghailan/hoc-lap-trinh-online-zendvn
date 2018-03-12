<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
        <h1>index2.phtml</h1>
        <?php $colors = array('red' => 'màu đỏ', 'green' => 'màu xanh lá', 'blue' => 'màu xanh dương'); ?>
        <?php $numbers = array('one' => 1, 'two' => 2, 'three' => 3, 'four' => 4); ?>
        <?php $emptyarr = array(); ?>
        
        <div>
            <?php foreach ($colors as $key => $value) { ?>
                <?php echo $key; ?> -- <?php echo $value; ?><br>
            <?php } ?>
        </div>
        <hr>
        <div>
            <?php foreach ($numbers as $key => $value) { if ($value > 2) { ?>
                <?php echo $key; ?> -- <?php echo $value; ?><br>
            <?php } ?><?php } ?>
        </div>
        
        <hr>
        <div>
            <?php $v33305178911iterated = false; ?><?php foreach ($numbers as $key => $value) { ?><?php $v33305178911iterated = true; ?>
                <?php echo $key; ?> -- <?php echo $value; ?><br>
            <?php } if (!$v33305178911iterated) { ?> 
                không có dữ liệu để hiển thị
            <?php } ?>
        </div>
        
        
        
</body>
</html>