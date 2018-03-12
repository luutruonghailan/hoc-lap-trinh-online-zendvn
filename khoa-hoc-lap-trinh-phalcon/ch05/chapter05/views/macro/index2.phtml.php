<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>

     <?php function vmacro_param($__p) { if (isset($__p[0])) { $name = $__p[0]; } else { if (isset($__p["name"])) { $name = $__p["name"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro param was called without parameter: name");  } } if (isset($__p[1])) { $age = $__p[1]; } else { if (isset($__p["age"])) { $age = $__p["age"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro param was called without parameter: age");  } } if (isset($__p[2])) { $color = $__p[2]; } else { if (isset($__p["color"])) { $color = $__p["color"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro param was called without parameter: color");  } }  ?>
        <div><b>Name  :</b> <?php echo $name; ?></div>
        <div><b>Age   :</b> <?php echo $age; ?></div>
        <div><b>Color :</b> <?php echo $color; ?></div>
     <?php } ?>
     
     
     <div>
            Gọi theo cách 1 : <br>
            <?php echo vmacro_param(array('nobita', 8, 'black')); ?>
     </div>
     
     <hr>
     
     <div>
            Gọi theo cách 2 : <br>
            <?php echo vmacro_param(array('color' => 'green', 'name' => 'doremon', 'age' => 10)); ?>
     </div>
     
    


</body>
</html>