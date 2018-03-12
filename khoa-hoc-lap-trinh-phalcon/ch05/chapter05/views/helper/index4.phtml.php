
<html>
<head>
<meta charset="${encoding}">


</head>
<body>
    <h1>set image</h1>
    
    
    
    <?php echo $this->tag->image(array('alt' => 'alt image', 'style' => 'width:300px; height:300px', 'public/image/Penguins.jpg')); ?>
    
    <?php 
        
       
        echo $this->tag->image([
            
            'alt'       =>  'alt image',
            'style'     =>  'width:300px; height:300px',
            'public/image/Penguins.jpg',
        ]);
    ?>
    
</body>
</html>