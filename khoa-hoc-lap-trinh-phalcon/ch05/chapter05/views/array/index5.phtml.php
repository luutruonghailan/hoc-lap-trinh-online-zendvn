<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
        <h1>index5.phtml</h1>
        <?php $number = range(1, 2); ?>
        
        <div>
            <?php $v23368279421iterator = $number; $v23368279421incr = 0; $v23368279421loop = new stdClass(); $v23368279421loop->length = count($v23368279421iterator); $v23368279421loop->index = 1; $v23368279421loop->index0 = 1; $v23368279421loop->revindex = $v23368279421loop->length; $v23368279421loop->revindex0 = $v23368279421loop->length - 1; ?><?php foreach ($v23368279421iterator as $key => $value) { ?><?php $v23368279421loop->first = ($v23368279421incr == 0); $v23368279421loop->index = $v23368279421incr + 1; $v23368279421loop->index0 = $v23368279421incr; $v23368279421loop->revindex = $v23368279421loop->length - $v23368279421incr; $v23368279421loop->revindex0 = $v23368279421loop->length - ($v23368279421incr + 1); $v23368279421loop->last = ($v23368279421incr == ($v23368279421loop->length - 1)); ?>
                <?php if ($v23368279421loop->length > 3) { ?>
                    <?php echo $key; ?>--<?php echo $value; ?> <br>
                <?php } else { ?>    
                    mảng có ít hơn 3 phần tử
                    <?php break; ?>
                <?php } ?>    
                    
                
            <?php $v23368279421incr++; } ?>
        </div>
       
        
</body>
</html>