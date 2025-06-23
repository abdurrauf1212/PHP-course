<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  
    $food = array('Apple','Mango','Orange','Banana');
    if (in_array('Apple',$food)) {
      echo " Find Sucessfully";
        # code...
    }else{
        echo " Con't Find ";
    }
  
    ?>