<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
        <h1>index4.phtml</h1>
        <?php $colors = array('red' => 'màu đỏ', 'green' => 'màu xanh lá', 'blue' => 'màu xanh dương', 'yellow' => 'màu vàng'); ?>
        
        <div>
            <?php foreach ($colors as $key => $value) { ?>
                <?php echo $key; ?> -- <?php echo $value; ?><br>
            <?php } ?>
        </div>
        <hr>
        
         <div>
            <?php $v26680579251iterator = $colors; $v26680579251incr = 0; $v26680579251loop = new stdClass(); $v26680579251loop->length = count($v26680579251iterator); $v26680579251loop->index = 1; $v26680579251loop->index0 = 1; $v26680579251loop->revindex = $v26680579251loop->length; $v26680579251loop->revindex0 = $v26680579251loop->length - 1; ?><?php foreach ($v26680579251iterator as $key => $value) { ?><?php $v26680579251loop->first = ($v26680579251incr == 0); $v26680579251loop->index = $v26680579251incr + 1; $v26680579251loop->index0 = $v26680579251incr; $v26680579251loop->revindex = $v26680579251loop->length - $v26680579251incr; $v26680579251loop->revindex0 = $v26680579251loop->length - ($v26680579251incr + 1); $v26680579251loop->last = ($v26680579251incr == ($v26680579251loop->length - 1)); ?>
                <?php echo $v26680579251loop->index; ?> -- <?php echo $v26680579251loop->index0; ?> -- <?php echo $v26680579251loop->revindex; ?> -- <?php echo $v26680579251loop->revindex0; ?><br>
            <?php $v26680579251incr++; } ?>
        </div>
        <hr>
        <div>
            <?php $v26680579251iterator = $colors; $v26680579251incr = 0; $v26680579251loop = new stdClass(); $v26680579251loop->length = count($v26680579251iterator); $v26680579251loop->index = 1; $v26680579251loop->index0 = 1; $v26680579251loop->revindex = $v26680579251loop->length; $v26680579251loop->revindex0 = $v26680579251loop->length - 1; ?><?php foreach ($v26680579251iterator as $key => $value) { ?><?php $v26680579251loop->first = ($v26680579251incr == 0); $v26680579251loop->index = $v26680579251incr + 1; $v26680579251loop->index0 = $v26680579251incr; $v26680579251loop->revindex = $v26680579251loop->length - $v26680579251incr; $v26680579251loop->revindex0 = $v26680579251loop->length - ($v26680579251incr + 1); $v26680579251loop->last = ($v26680579251incr == ($v26680579251loop->length - 1)); ?>
                <?php if ($v26680579251loop->index == 2) { ?>
                    <?php echo $key; ?> -- <?php echo $value; ?><br>
                <?php } ?>
            <?php $v26680579251incr++; } ?>
        </div>
        
</body>
</html>