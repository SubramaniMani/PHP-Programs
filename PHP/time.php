<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    echo " <h1> This Current Time is : " .date("h:i:sa");

    date_default_timezone_set("Asia/Calcutta");

    echo " <h1>This Current Date". date("h:i:sa");
    
    ?>
    
</body>
</html>