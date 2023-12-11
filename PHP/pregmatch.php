<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
/*$str ="PHP Programming";
$str1 = "/Programming/i";

echo preg_match($str1 ,$str);
*/

/*$str ="Java Programming Language";
$str1 ="/Java Programming Language/i";
echo preg_match_all($str1 ,$str);
*/


$str ="PHP Program";
$pattren ="/ Program/i"; // replace 
echo preg_replace($pattren  ,"Devloper", $str);
?>


</body>
</html>