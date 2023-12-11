<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Time  // class syntax 
    {
       public $name ;
       public function __construct($name) {
        $this->name = $name;
      }
       public function watch() // method 
        {
            $a = 10;
            $b = 20;
            $c = $a+$b;
            $str = "PHP Programming Language";
            echo "<h2>  $str </h2> <br>";
            echo $c;
        }   
    }
    
    $object = new Time('hgfhbv'); // object creation 
    echo $object->name;
   $object->watch();  // object is reference name 
      // no need for doller symbol
    // $object->watch();

   
    ?>
</body>
</html>