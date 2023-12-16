<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // class Animal
    // {
    //     public $name;
    //     public function __construct($name)
    //     {
    //         $this->name = $name;
    //     }
    //     public function __destruct()
    //     {
    //         echo "All The Animal Is Good{$this ->name}";
    //     }
    // }

    // $animal = new Animal("Tiger");



    class Animal 
    {
        public $name;
        protected $color;
        private $weight;
    }

    $animal = new Animal();
    $animal->name = "Lion";
    $animal->color='brown';
    $animal->weight= 200;
   ?> 
</body>
</html>