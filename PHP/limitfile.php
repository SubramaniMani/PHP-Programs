<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="limitfile.php" method="POST" enctype="multipart/form-data"> 
    Name: <input type="text" name="name" required><br><br>
    File Upload: <input type="file" name="file" required><br><br>

    <p><strong>Note: </strong> Only .pdf, .docx allowed</p>
    <input type="submit" name="ready" required><br>
</form> 

<?php
if(isset($_POST['ready']))
{
    $allow = array("pdf" => "application/pdf", "docx" => "application/vnd.openxmlformats-officedocument.wordprocessingml.document");

    $name = $_FILES['file']['name'];
    $type = $_FILES['file']['type'];
    $ext = pathinfo($name, PATHINFO_EXTENSION);

    if (!array_key_exists($ext, $allow)) {
        
        die('Please Select Correct Format');
    }

    if (file_exists("uploads/" . $_FILES['file']['name'])) {
        echo "This File Already Exists";
        echo "" ;
    } else {
        move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $_FILES['file']['name']);
        echo "Your File Uploaded Successfully";
        echo"";
    }
}
?> 

</body>
</html>
