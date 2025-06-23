<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $WeekDay = 2;
    switch ($WeekDay) {
        case 1:
         echo " Today is Monday";
             break;
        case 2:
         echo " Today is Tuesday";
             break;
        case 3:
         echo " Today is Wenesday";
             break;
        case 4:
         echo " Today is Tursday";
            break;
        case 5:
          echo " Today is Firday";
            break;
        case 6:
         echo " Today is Saturday";
            break;
        case 6:
         echo " Today is Sunday";
            break;                                                            
        default:
        echo "Enter the Valid Weekday"; 
            break;
    }
    ?>
</body>
</html>