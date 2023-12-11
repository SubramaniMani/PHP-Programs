<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="name.css">
    <title>Document</title>
</head>
<body>


<?php 
$nameError="";
$phoneNumberError="";
$mailError="";

$name="";
$phoneNumber="";
$mail="";

//Name Validation 

if($_SERVER['REQUEST_METHOD']=='GET')
{
   
   /* if(empty($_POST['name']))
    {
        $nameError="This Feild is Required";
    }
    else
    {
        $pattren="/^[a-zA-Z]+$/";
        $check=preg_match_all($pattren,$_POST['name']);
    
    if($check)
       {
        $name=$_POST['name'];
    }
    else
    {
        $nameError= "Enter The Correct Pattren";
    }
}

// PhoneNumber VAlidation 

if(empty($_POST['phoneNumber']))
{
    $phoneNumberError="This Feild is Required";
}
else
{
    $pattren="/^[0-9]/";
    $check=preg_match_all($pattren,$_POST['phoneNumber'] );
    
    if($check)
    {
        $phoneNumber=$_POST['phoneNumber'];
    }
    else
    {
        $phoneNumberError= "Enter the Correct Pattren";
    }
}


// Mail Validation 

if(empty($_POST['mail']))
{
    $nameError= "This Feild is Requird";
}
else
{
    // $pattern = "/^ [a-zA-Z0-9._-]+@ [a-zA-Z0-9.-]+. [a-zA-Z] {2,4}$/";
    $check =$_POST['mail'];
}
if($check)
{
    $mailError=$_POST['mail'];
}
else
{
  $mailError="Enter The Correct Pattren";
}*/

}
?>
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>" autocomplete="on">
<div>
    <div class="formElements">
        <label> Enter Your Name </lable>
        <input type="text" name="name" id="name" required>
        <span> <?php echo $nameError; ?> </span>
    
<div>
    <label> Enter Your Phone Number</label>
    <input type="text" name="phoneNumber" id="phoneNumber" required >
    <span> <?php echo $phoneNumberError;?></span>
</div>
    <label> Enter Your Mail Id </label>
    <input type="email" name="mail" id="mail" required>
    <span> <?php echo $mailError; ?> </span>
     <lable >Select Date </lable>
    <input type="date" name="date" id="date" required>

    <lable>Feekback</lable>
    <input type="textarea" name="feedback"  id="feedback">
    <lable>Upload File </lable>
    <input type="file" name="submit" id="submit">



<div class="button">
        <button type="submit">Submit</button>
</div>
    </form>

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
        

</body>
</html>