<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $name=" ";
    $nameError="";


    /*if($_SERVER['REQUEST_METHOD']=="POST")
    {
        if(empty($_POST['name']))
        {
            $nameError= "Check This Values";
        }s
        else{
            $name = $_POST['name'];
        }
    }
*/
    ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<lable>Enter Your Name : </lable>
<input type="text" name="name" value="<?php echo $name ?>" required >
<button type="submit">submit</button>



</form>
    


<?php

echo $name;

?>
</body>
</html>