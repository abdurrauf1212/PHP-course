<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "GET">
        <input type="text" name="person">
        <button>Submit</button>
    </form>
    <?php
    $name = $_GET['person'];
    echo $name." is a Handsome Fellow!";
  
    ?>
</body>
</html>