<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <?php


include("ab1.php");
class Ab extends Ab1 
{
    public function food()
    {
        echo "PHP"."<br>";
    }
    public function food1()
    {
        echo "JavaScript";
    }



}
$obj = new Ab();
{
    $obj ->food();
    $obj ->food1();


}


?>
    
</body>
</html>