<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //intercet print the common word
$fruit = ['a'=>'Apple','c'=>'Mango','b'=>'Orange','d'=>'Banana'];
$vagias = ['a'=>'Apple','b'=>'Mango'];
$NewArr = array_diff($fruit,$vagias);
echo "<pre>";
print_r($NewArr);
  echo "</pre>";
?>
</body>
</html>