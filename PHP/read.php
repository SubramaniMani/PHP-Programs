<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$file = fopen("rd.txt", "a");
$txt = "Java Programming Language\n";
fwrite($file, $txt);
$txt = "C++ Programming Language\n";
fwrite($file, $txt);
fclose($file);
 echo readfile("rd.txt");

?>
    
</body>
</html>