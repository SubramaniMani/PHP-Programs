<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php
     class Animal
     {
        public  $name;
        public function __construct($name)
        {
         $this->name = $name;
        }
        public function getName()
        {
            return $this->name;
        }
    }
        $lion = new Animal("Lion");
         echo "<h2>". $lion->  getName();
     
    
    ?>




    
</body>
</html>