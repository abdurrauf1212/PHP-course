<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
for ($i=1; $i <=100 ; $i = $i+10) { 
    for ($j=$i; $j <$i +10 ; $j++) { 
        # code...
        echo $j. " ";
    }
    echo "<br>";
    # code...
}
?>
</body>
</html>