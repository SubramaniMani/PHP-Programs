<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function sumMyNumbers(...$x) {
  $n = 0;
  
  
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
    echo $n . "<br>"; 
  }
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;
?>
    
</body>
</html>