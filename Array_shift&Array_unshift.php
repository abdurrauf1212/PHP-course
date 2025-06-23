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
    array_unshift($Color,'red');
    // array_shift($Color);
    echo "<pre>";
    print_r($Color);
    echo "</pre>";
    ?>
