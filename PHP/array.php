<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

/*$subject = array(" <h2> Tamil" , "English" ,"Maths" , "Science", "Social </h2> ");

$Length = count($subject);

for($i=0; $i<$Length; $i++)
{
    echo $subject[$i];
    echo "<br>";
    echo "<br>";
}
*/

// Associate Array 

/*$age = array("Vivek" =>"23", "Subramani"=>"23", "Karthi"=>"23", "Bala"=> "23");

$length = count($age);

foreach ($age as $name => $value)
 {
    echo   " <h3> This Person Name " ."$name:  Age is  $value<br> </h3>";
}
*/

//multidimentional Array 

$Name = array (

    array ("Vivek ",23,9025392100,"trichy"),
    array ("Subramani ",23,9025392100,"musiri"),
    array ("Karthi ",23,9025392100,"Saathanur"),
    array ("bala ",23,9025392100,"Thuraiyur"),
    array ("Ravi ",23,9025392100,"Pethupatti"),
);

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 4; $col++) {
      echo "<li>".$Name[$row][$col]. "</li>";
    }
    echo "</ul>";
    
 

}
 



?>
</body>
</html>