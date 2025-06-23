<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$fruit = ['a'=>'Apple','b'=>'Mango','bc'=>'Orange','d'=>'Banana','e'=>'Apple'];

// $NewArr = array_values($fruit);
$NewArr = array_unique($fruit);
echo "<pre>";
print_r($NewArr);
  echo "</pre>";
?>
</body>
</html>