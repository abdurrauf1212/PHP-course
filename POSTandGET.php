<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //    echo $_GET['name'];
     echo $_POST['name'];
    ?>
    <form method = "POST">
    <input type="hidden" name="name" value="Rauf" >
    <button type="submit">PRESS ME!</button>
    </form>
<!-- <form method = "GET">
    <input type="hidden" name="name" value="Rauf" >
    <button type="submit">PRESS ME!</button>
    </form> -->
</body>
</html>