<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="

<?php
 echo $_SERVER['PHP_SELF']; 
?>">

<input type="text" name="name"> 
<input type="text" name="numbers">
<button type="submit">submit </button>
</form>

<?php
echo "Name  : ".$_POST['name'] ."<br>";
echo  "Mobile Number :". $_POST['numbers'] ;


    
?>
    
</body>
</html>