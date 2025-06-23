<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$Age = [
    "Abdur" => 10,
    "Hafsa" => 20,
    "Rauf" => 30,
    "Asad" => 40  
];
echo "<pre>";
print_r($Age);
echo "</pre>";
echo $Age["Abdur"] ."<br>";
echo $Age["Hafsa"] . "<br>";
echo $Age["Rauf"] . "<br>";
echo $Age["Asad"] . "<br>";


?>
</body>
</html>