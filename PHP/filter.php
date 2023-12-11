<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

 // $str="subramani@gmail.com";
  //print filter_var($str,FILTER_VALIDATE_EMAIL)."<br>";
  //print filter_id('validate_url' )."<br>"; 
  

//VAlidatin 

$mail ="Subramani@gmail.";
$nmail =filter_var($mail,FILTER_SANITIZE_EMAIL);

if(filter_var($nmail, FILTER_VALIDATE_EMAIL)==true)
{
  echo "Vaild";
}
else 
{
  echo "Not Valid";
}
/*$email = filter_var($mail,FILTER_SANITIZE_EMAIL)."<br>";

if(filter_var($email,FILTER_SANITIZE_EMAIL)===false)
{
  echo "not valid id";
}
else
{
 echo "vaild Id";
}*/

?>
</body>
</html>