<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    class Food
    {
        public $name;
        public $vfood;

        function set_name($name)
        {
            $this->name = $name; 
        }
         function get_name()
        {
           return $this->name;
        }
    }
    $vegBriyani = new Food();
    $chickenBriyani = new Food();

  $vegBriyani ->set_name("Veg");

   $chickenBriyani ->set_name("Chicken");

    echo "<h2>".$vegBriyani->get_name();
    echo "<br>";
    echo $chickenBriyani ->get_name()."<br>";

    echo $vegBriyani->name;


    ?>
    
</body>
</html>