<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo "<pre>";
print_r($_FILES); 
echo "</pre>"
?>

<form method="post" action=" 
<?php
echo $_SERVER['PHP_SELF'];
?>"
enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit">
</form>




</body>
</html>