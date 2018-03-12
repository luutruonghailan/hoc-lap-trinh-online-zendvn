
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
<style type="text/css">
    .link
    {
    	background-color:green;
    	color:white;
    }
</style>
</head>
<body>
    <h1>view helper linkTo</h1>
    <?php echo $this->tag->linkTo(array('chapter04/helper/goal', 'move-goal')); ?>
    <hr>
    <?php echo $this->tag->linkTo(array(array('for' => 'linkhelper'), 'move-goal-2', 'title' => 'link2', 'class' => 'link')); ?>
    <hr>
    <?php 
       
        
       
        
        
    
        echo $this->tag->linkTo([
            [
                'for'       =>      'linkhelper'
            ],
            'move-goal-2',
            'title'     =>  'link2',
            'class'     =>  'link'
        ]);
    ?>
</body>
</html>