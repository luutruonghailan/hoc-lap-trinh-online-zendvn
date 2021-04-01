<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>JS Object - ZendVN</title>
    <link rel="stylesheet" href="css/jquery.treeview.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery.treeview.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#browser").treeview({
                toggle: function() {
                    console.log("%s was toggled.", $(this).find(">span").text());
                }
            });
			$("#object").treeview({
                toggle: function() {
                    console.log("%s was toggled.", $(this).find(">span").text());
                }
            });
        });
    </script>
    
</head>
<body>

    <h3>JavaScript Object</h3>
    <div class="area-tree">
    	<ul id="object" class="filetree">        
            <?php require("object/number-obj.html");?>		<!-- JS NUMBER OBJECT -->
            <?php require("object/array-obj.html");?>		<!-- JS ARRAY OBJECT -->
            <?php require("object/str-obj.html");?>			<!-- JS STRING OBJECT -->
            <?php require("object/math-obj.html");?>		<!-- JS MATH OBJECT -->
            <?php require("object/boolean-obj.html");?>		<!-- JS BOOLEAN OBJECT -->
            <?php require("object/date-obj.html");?>		<!-- JS DATE OBJECT -->
            <?php require("object/regexp-obj.html");?>		<!-- JS REGEXP OBJECT -->
            <?php require("object/global-obj.html");?>		<!-- JS GLOBAL OBJECT -->
        </ul>
    </div>
    
    <h3>Browser Objects</h3>
    <div class="area-tree">
    	<ul id="browser" class="filetree">
            <?php require("browser/window-obj.html");?>		<!-- JS WINDOW OBJECT -->
            <?php require("browser/navigator-obj.html");?>	<!-- JS NAVIGATOR OBJECT -->
			<?php require("browser/screen-obj.html");?>		<!-- JS SCREEN OBJECT -->
			<?php require("browser/history-obj.html");?>	<!-- JS HISTORY OBJECT -->
            <?php require("browser/location-obj.html");?>	<!-- JS LOCATION OBJECT -->
		</ul>
	</div>
    
</body>
</html>