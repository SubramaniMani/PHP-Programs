<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

class Local
{

    function global()
    {
       // return __CLASS__ ;
       // return __FILE__;
       // return __DIR__;
       // return __LINE__;
      // return __METHOD__;
      //return __TRAIT__;
      //return __FUNCTION__;
     // return __NAMESPACE__;

    }
}


$obj =new Local();
echo $obj->global();
?>
<?php
//echo $global;


?>
</body>
</html>