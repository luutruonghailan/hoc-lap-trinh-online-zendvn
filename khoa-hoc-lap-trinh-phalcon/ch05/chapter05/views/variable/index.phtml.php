<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<title>Insert title here</title>
</head>
<body>
    <h1>index.phtml</h1>
    
    <div>
        
        <?php $firstName = '<b>peter</b>'; ?>
        <?php $lastName = '<b>brown</b>'; ?>
        <?php $fullName = $firstName . ' ' . $lastName; ?>
    </div>
    
    <div>
        First_Name : <?php echo $firstName; ?><br>
        Last_Name :  <?php echo $lastName; ?><br>
        Full_Name :  <?php echo $fullName; ?><br>
    </div>
</body>
</html>