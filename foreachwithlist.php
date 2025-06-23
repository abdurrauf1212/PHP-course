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
     echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>
     <tr>
     <th>EMP_Id</th>
       <th>Emp_Name</th>
         <th>Emp_Qulification</th>
           <th>Emp_Salary</th>
     
     
     </tr>";

    foreach ($Emp as list($id,$Name , $qulification , $Salary)) {
        echo "<tr>
        <td>$id</td>
         <td>$Name</td>
          <td>$qulification</td>
           <td>$Salary</td>
        </tr>";
        # code...
    }
        echo "</table>";
    ?>
</body>
</html>