<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="task.css">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

        <div class="box">
            <h1>Profile Update</h1>
            <label>Enter Your Name</label>
            <input type="text" name="name" required>
            <label>Phone Number</label>
            <input type="text" name="number" required maxlength="10" minlength="10">
            <label>Enter Email</label>
            <input type="email" name="mail" required>
            <label>Upload Picture</label>
            <input type="file" name="image" required>
            <input type="submit" name="submit" value="Submit">
        </div>

        <!-- Avatar section -->
       
        <div class="box1">
        <div class="avatar-wrapper">
        <div class="upload-button">
        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
         <?php
        if(isset($_POST['submit']))
         {
             $image_name =$_FILES['image']['name'];
             $image_type =$_FILES['image']['type'];
             $image_size =$_FILES['image']['size'];
             $image_tmp_name =$_FILES['image']['tmp_name'];
             move_uploaded_file($image_tmp_name,"uploads/$image_name");
             echo "<img src='uploads/$image_name' width='250'; height='400'><br>";
        }
        ?>
        </div>
