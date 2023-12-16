<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$arr1=array("PHP","Java","Python");
function myfunc ( $arr1)
{
   foreach ($arr1 as $lang)
   {
      echo $lang . " " . "\n";
   }
}
myfunc($arr1);



?>
    
</body>
</html>