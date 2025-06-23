<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $Color = array( "White","green","blue","yallow");
     $food = array('Apple','Mango');
    // array_pop($Color);
    $NewArray= array_merge($Color,$food);
    echo "<pre>";
    print_r($NewArray);
    echo "</pre>";
    ?>
