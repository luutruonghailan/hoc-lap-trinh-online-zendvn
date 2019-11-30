<link rel="stylesheet" href="css/style.css">
<?php 
    $i = 'a12';
    $imageName = 'defaul.jpg';
    $imageArr = [
        'a'   => 'abc.jpg',
        'a12' => 'def.jpg',
         13   => 'ghj.jpg'
    ];

    if(array_key_exists($i, $imageArr)){
        $imageName = $imageArr[$i];
    }
    echo '<img class="my-girl" src="./images/'.$imageName .'" />';