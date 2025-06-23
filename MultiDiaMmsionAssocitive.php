<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Marks = [
        "Rauf" =>[
            "Eng" => 80,
            "Phy" => 90,
            "Math" => 75
        ],
          "Asad" =>[
            "Eng" => 85,
            "Phy" => 95,
            "Math" => 65
          ],
          "Hafsa" =>[
            "Eng" => 75,
            "Phy" => 70,
            "Math" => 95
          ]
          ];
          echo "<table border = ''2px' cellpadding = '5px' cellspacing = '0'>
          <tr>
           <th>Name</th>
           <th>English</th>
           <th>Physics</th>
           <th>Maths</th>
          </tr> ";
          foreach ($Marks as $key => $val1) {
            echo "<tr>;
                <td>$key</td>";
            foreach ($val1 as $val2) {
                echo "<td>$val2</td>";
                # code...
            }
              echo "</tr>";
            # code...
          }
          echo "</table>";
          echo "<pre>";
          print_r($Marks);
          echo "</pre>";

    ?>
</body>
</html>