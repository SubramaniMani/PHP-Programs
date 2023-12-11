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

 Name : <input type="text" name="name">
 Email : <input type="text" name="mail">
 <button type="submit">submit </button>
</form>

<?php 
echo "<br>";
 $Name ="<h2>". $_REQUEST['mail'] . "<h2>";
print_r($Name);
?>

</body>
</html>