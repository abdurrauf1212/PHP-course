<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       $x = 10;
       $y = 20;
       echo "the value of X is :".$x;
       echo "<br>the value of Y is :".$y;
       $temp = $x;
       $x  = $y;
       $y = $temp;
       echo "<br>the change value of  X is :".$x;
       echo "<br>the change value of Y is :".$y;
    ?>
</body>
</html>