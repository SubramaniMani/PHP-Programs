<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  include ("Food.php");
class Food1 extends Food
{
 protected $db;
    
    public function curdRice()
    {
        echo "curdRice ";
    }
    public function Biriyani()
    {
        echo "Food1";
    }
}   
    
$food = new Food1();
$food ->Biriyani();
$food ->curdRice();







?>
    
</body>
</html>