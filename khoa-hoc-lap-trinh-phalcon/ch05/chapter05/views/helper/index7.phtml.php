
<html>
<head>
<meta charset="${encoding}">


</head>
<body>
    <?php 
        $title = $this->tag->friendlyTitle('example title','+'); //example+title
    ?>
    <div title="<?php echo $title; ?>">content of friendlyTitle</div>
    
     <div title="<?php echo $this->tag->friendlyTitle('example title', '*'); ?>">content of friendly_title</div>
  
</body>
</html>