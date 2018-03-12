<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>

     <?php function vmacro_function1() { ?>
        <div>Hello macro function1</div>
     <?php } ?>
     
     <?php function vmacro_function2() { ?>
         <?php return '<div>Hello macro function2</div>'; ?>
     <?php } ?>
     
     
     <div>
        <?php echo vmacro_function1(array()); ?>
        <?php echo vmacro_function1(array()); ?>
        
     </div>
     
     <hr>
     
     <div>
        <?php echo vmacro_function2(array()); ?>
     </div>


</body>
</html>