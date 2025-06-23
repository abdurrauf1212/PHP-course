<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Emp = [
    [1 , "Abdur Rauf", "Manager", 500000],
    [2 , "Hafsa BiBi", "SalasWoman", 400000],
    [3 , "Asad Khan", "Computerr Operater", 300000],
    [4 , "Abid Rahman", "Driver", 200000]

    ];
echo "<table border ='2px' cellpadding = '5px' cellspacing = '0'>";
echo "<tr>
<th>Emp.id</th>
<th>Name</th>
<th>Qualification</th>
<th>Salary</th>
</tr>";
    foreach ($Emp as $value1) {
        echo "<tr>";
       foreach ($value1 as $value2) {
        echo "<th>$value2 </td>";
        # code...
       }
       echo "</tr>";
        # code...
    }
    echo "</table>";
    // for ($i=0; $i < 4; $i++) { 
    //     for ($j=0; $j < 4; $j++) { 
    //         echo $Emp[$i][$j] ." ";
    //         # code...
    //     }
    //     echo "<br>";
    //     # code...
    // }
//     echo "<pre>";
// print_r($Emp);
// echo "</pre>";
    ?>
</body>
</html>