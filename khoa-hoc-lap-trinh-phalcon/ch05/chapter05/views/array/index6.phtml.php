<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
        <h1>index6.phtml</h1>
        <?php $colors = array('red' => 'màu đỏ', 'green' => 'màu xanh lá', 'blue' => 'màu xanh dương', 'yellow' => 'màu vàng'); ?>
        
        <div>
            <?php $v20055979591iterator = $colors; $v20055979591incr = 0; $v20055979591loop = new stdClass(); $v20055979591loop->length = count($v20055979591iterator); $v20055979591loop->index = 1; $v20055979591loop->index0 = 1; $v20055979591loop->revindex = $v20055979591loop->length; $v20055979591loop->revindex0 = $v20055979591loop->length - 1; ?><?php foreach ($v20055979591iterator as $key => $value) { ?><?php $v20055979591loop->first = ($v20055979591incr == 0); $v20055979591loop->index = $v20055979591incr + 1; $v20055979591loop->index0 = $v20055979591incr; $v20055979591loop->revindex = $v20055979591loop->length - $v20055979591incr; $v20055979591loop->revindex0 = $v20055979591loop->length - ($v20055979591incr + 1); $v20055979591loop->last = ($v20055979591incr == ($v20055979591loop->length - 1)); ?>
                <?php if ($v20055979591loop->first == 1) { ?>
                    <?php echo $key; ?> -- <?php echo $value; ?><br>
                <?php } ?>
                
                <?php if ($v20055979591loop->last == 1) { ?>
                    <?php echo $key; ?> -- <?php echo $value; ?><br>
                <?php } ?>
            <?php $v20055979591incr++; } ?>
        </div>
        
        
</body>
</html>