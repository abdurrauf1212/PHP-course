<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // function Abc($fname = "Frist", $lname = "Last") {
    //     $a = "$fname $lname";
    //     return $a;
    // }
    // $name = Abc("Abdur"," Rauf");
    // echo "Your name is :". $name;
    function Sum($Eng , $Math, $phy) {
        $s = $Eng + $Math + $phy;
        return $s;  
    }
    function percentage($st)  {
        $per = $st/3;
        echo $per . "%";
    }
    $total = Sum(85, 80 , 75);
    percentage($total)
   
  
    ?>
</body>
</html>