<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $per = 525;
    if ($per >= 80 && $per <=100) {
        echo " You are in Merit.";
        # code...
    }elseif  ($per >= 60 && $per <=80) {
        echo " You are in Ist Division.";
        # code...
    }elseif  ($per >= 45 && $per <=60) {
        echo " You are in IInd Division.";
        # code...
    }elseif ($per >= 33 && $per <=45 ){
        echo " You are in IIIrd Division.";
        # code...
    }elseif  ($per <33) {
        echo " You are Fail.";
        # code...
    }else {
        echo " Enter the Valid percentage.";
        # code...
    }

    ?>
</body>
</html>