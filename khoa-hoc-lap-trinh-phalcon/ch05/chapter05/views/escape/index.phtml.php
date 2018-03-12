
<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>


    
    <b>Escape e: </b>
    <?php echo $this->escaper->escapeHtml('<h1>Escape e</h1>'); ?>                   
    <hr>
    
    
    <b>Escape escape: </b>
    <?php echo $this->escaper->escapeHtml('<h3>Escape escape</h3>'); ?>        
    <hr>
    
    
    <b>Escape attribute: </b>
    <table width=" <?php echo $this->escaper->escapeHtmlAttr('"><h1>Attack attribute html</table>'); ?> ">
        <tr>
            <td>Attack attribute html</td>
        </tr>
    </table>
    <hr>
    
    <b>Escape css: </b>
    <a style="color: <?php echo $this->escaper->escapeCss('"><script>alert(1)</script><a href="#'); ?>">escape css</a>
    <hr>
    
     <b>Escape escape_js: </b>
        <script>document.title =  '<?php echo $this->escaper->escapeJs('\'; alert(100); var x=\''); ?>'</script> 
    <hr>
    
</body>
</html>