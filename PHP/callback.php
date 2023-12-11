<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
     
   /*function str1($fruits) {
    return strlen($fruits);
   }
   $string =["apple","orange"];
    $string1 =array_map("str1",$string);

   print_r($string1);*/


  
    function value($name)
    {
        return $name."!";
    }
    function name( $name)
    {
        return $name."?";
    }
    function printformatted($name, $value)
     {
         echo $value($name);
     }
     printformatted("Subramani","PHP");
     printformatted("JS","JAVA");
  ?>  
</body>
</html>