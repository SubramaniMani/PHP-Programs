<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 setcookie("Name","PHP Programming Language" , time() +10,"/");
echo $_COOKIE['Name'];
?>
    
</body>
</html>