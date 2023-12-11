<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

   // $object = array ("vivek"=>24,"Mani"=>23);
    //echo json_encode($object);
    //$object1 = '{"Mani":24,"vivek":24}';
    //var_dump(json_decode($object1, true));
    

    // $object = '{

    //     "Mani" : 25,
    //     "Vivek" : 23,
    //     "Karthi" : 24 
    // }';

    // $obj = json_decode($object);

    // echo $obj ->  Mani ."<br>";
    // echo $obj ->  Vivek."<br>";
    // echo $obj ->Karthi."<br>";



    $family =
    '{

        "mani" : 25,
        "Vivek" : 23,
        "karthi" : 23
    }';

    $obj = json_decode($family );
    foreach ($obj as $key => $value) 
    {

        echo 'Name'.  "=>".$key ."<br>".'Age'. $value ."<br>"."<br>";
    }
?>
</body>
</html>