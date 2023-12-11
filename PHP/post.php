<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="

<?php 
echo $_SERVER['PHP_SELF'];
?>">

Name :<input type="text" name="1">
Email :<input type="text" name="2">
<button type="submit"> submit </button>

</form>

<?php

 echo  $Name= $_POST['1']."<br>";
 echo $Enail= $_POST['2'];


?>
    
</body>
</html>