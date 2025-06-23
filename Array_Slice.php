<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fruit = ['Apple','Mango','Orange','Banana'];
  // array_slice(name ,Start,langth);
   
$NewArr = array_slice($fruit,1,2);
   echo "<pre>";
print_r($NewArr);
  echo "</pre>";
    ?>
</body>
</html>