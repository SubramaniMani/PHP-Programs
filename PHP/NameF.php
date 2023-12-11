<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nameError="";
$name = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(empty($_POST['name']))
{
    $nameError= "Required";
}
else
{
    $name=$_POST['name'];
}
}
?>


<form   method="POST" action= "<?php echo $_SERVER['PHP_SELF'];?> ?>">
<label>Enter Your Name : </label>
<input type="text" name="name"  value="<?php  echo $name?>" required>
<label>Enter Your E-mail id</label>
<input type="email" name="email"required>
<label>Website</label>
<input type="url" name="url" required>
<button type="submit">Submit</button>


<?php
echo $name;
?>
</body>
</html>