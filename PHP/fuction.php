<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// function outside declare is global 
$x = 10;

function globalfun()
{
    echo "<h1> Function Run Successfully </h1>";
}

function localfuns()
{
    $y = 30; 
    // local variable  function inside declare
    echo "<h1> 2nd Function Run Successfully </h1>";
}

globalfun();
localfuns();
?>


    
</body>
</html>