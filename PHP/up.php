<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Select Image:</label>
        <input type="file" name="image" accept="image/*" required>
        <input type="submit" value="Upload">
        <img src="$response" >

    </form>


    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = array();

    // Check if the "image" key exists in the $_FILES array
    if (isset($_FILES["image"])) {
        $target_dir = "uploads/";

        // Ensure the "uploads" directory exists
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0755, true);
        }

        $image_name = basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $image_name;

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $response['success'] = true;
            $response['message'] = "File has been uploaded successfully.";
            $response['fileUrl'] = $target_file; // You can use this URL to display the uploaded image
        } else {
            $response['success'] = false;
            $response['message'] = "Error uploading the file.";
        }
    } else {
        $response['success'] = false;
        $response['message'] = "No file uploaded.";
    }

    // Set the response header to indicate that the content is JSON
    header('Content-Type: application/json');

    // Encode the response array as JSON and echo it
    echo  json_encode($response);
}
?>

</body>
</html>
