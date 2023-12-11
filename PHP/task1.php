<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-center">Upload Image</h3>
                    <form class="my-5" method="POST" enctype="multipart/form-data">
                        <input type="file" name="image" class="form-control">
                        <input type="submit" name="submit" value="Upload" class="btn btn-success my-3">
                    </form>
                </div>
                <div class="col-md-6">
                    <h3 class="text-center">Display</h3>
                    <?php
                    if(isset($_POST['submit']))
                    {
                        $image_name = htmlspecialchars($_FILES['image']['name']);
                        $image_tmp_name = $_FILES['image']['tmp_name'];
                        $upload_path = "uploads/";

                        move_uploaded_file($image_tmp_name, $upload_path . $image_name);
                        echo "<img src='$upload_path$image_name' width='250' height='400'><br>";
                    }
                    else {
                        echo "No image uploaded yet.";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
