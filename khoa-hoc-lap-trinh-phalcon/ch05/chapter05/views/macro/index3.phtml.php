<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>

     <?php function vmacro_sum($__p) { if (isset($__p[0])) { $value1 = $__p[0]; } else { if (isset($__p["value1"])) { $value1 = $__p["value1"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro sum was called without parameter: value1");  } } if (isset($__p[1])) { $value2 = $__p[1]; } else { if (isset($__p["value2"])) { $value2 = $__p["value2"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro sum was called without parameter: value2");  } }  ?>
        <?php $result = $value1 + $value2; ?>
        <?php return $result; ?>
     <?php } ?>
     
     <?php function vmacro_multi($__p) { if (isset($__p[0])) { $value1 = $__p[0]; } else { if (isset($__p["value1"])) { $value1 = $__p["value1"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro multi was called without parameter: value1");  } } if (isset($__p[1])) { $value2 = $__p[1]; } else { if (isset($__p["value2"])) { $value2 = $__p["value2"]; } else {  throw new \Phalcon\Mvc\View\Exception("Macro multi was called without parameter: value2");  } }  ?>
        <?php $result = $value1 * $value2; ?>
        <?php return $result; ?>
     <?php } ?>
     
     <div>
        Sum   : <?php echo vmacro_sum(array(6, 4)); ?><br>
        Multi : <?php echo vmacro_multi(array(6, 4)); ?><br>
     </div>
     
     
     
    


</body>
</html>