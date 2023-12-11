<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$d=mktime(01, 00, 00, 12, 6 , 2023);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

?>

    
</body>
</html>