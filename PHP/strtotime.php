<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
 $d=strtotime("tomorrow");
 echo date("Y-m-d h:i:sa", $d) . "<br>";


 $d=strtotime("today");
 echo date("Y-m-d h:i:sa", $d) . "<br>";

 $d=strtotime("next week");
 echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

</body>
</html>