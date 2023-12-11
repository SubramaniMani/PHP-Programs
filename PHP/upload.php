<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data"> 
    <label>Upload File</label>
    <input type="file" name="file" required>
    <input type="submit" name="submit">
</form>
<img src="<?php $file ?>" height="250"width="250">
<?php
if(isset($_POST['submit']))
{
    if(isset($_FILES['file']))
    {
        $file = $_FILES['file']['name'];
        echo "File Path: $file";
        echo  " <h3>Successfully Uploaded... <br> </h2>";
        echo readfile("$file");
    }
    else
    {
        echo "Error uploading file";
    }
}

?>
</center>

</body>
</html>