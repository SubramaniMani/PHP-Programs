<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     class Brids
     {
        public function bad()
        {
            echo "Subramani" ."<br>";
        }
     }
    
    class Animal extends Brids
    { 
        public function good()
        {
            echo "hello" ."  ";
        }
        
    }
    $animal = new Animal("");
    $animal->good();    
    $animal ->bad();

?>
    
</body>
</html>