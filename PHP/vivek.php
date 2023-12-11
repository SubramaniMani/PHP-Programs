<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
select image : <input type="file" name="image"><br>
description : <input type="text" name="desc"><br>
<input type="submit" name="TEXT" value="upload now">
</form>
    
<?php 
  if(isset($_POST['TEXT']))
  {

    $image_name =$_FILES['image']['name'];
    $image_type =$_FILES['image']['type'];
    $image_size =$_FILES['image']['size'];
    $image_tmp_name =$_FILES['image']['tmp_name'];
    $desc=$_POST['desc'];

    move_uploaded_file($image_tmp_name,"uploads/$image_name");
    echo "<img src='uploads/$image_name' width='250'; height='400'><br>$desc";

  }
  else{
    echo "no";
  }
?>

</body>
</html>