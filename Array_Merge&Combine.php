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
    $vagias = ['carrot', 'pea'];
    $newVar = array_merge($fruit,$vagias);

   echo "<pre>";
print_r($newVar);
  echo "</pre>";
    ?>
</body>
</html>