<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculater </title>
</head>
<body>
<form>
    <input type="text" name="Num1" placeholder= "Number 1">
    <input type="text" name="Num2" placeholder= "Number 2">
 
    <select name="operator">
        <option value="">None</option>
        <option value="">Add</option>
        <option value="">Subtract</option>
        <option value="">Multiply</option>
        <option value="">Divide</option>
    </select>
    <br><br>
    <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
  <p>The Answer is :</p>
<?php
if (isset($_GET['submit'])) {
    $result1 = $_GET['Num1'];
    $result2 = $_GET['Num2'];
    $operator = $_GET['operator'];

    switch ($operator) {
        case "None":
            echo "Please Select the Some thing";
            break;
            case "Add":
                echo $result1 + $result2;
                break;
                case "Subtract":
                    echo $result1 - $result2;
                    break;
                    case "Multiply":
                        echo $result1 * $result2;
                        break;
                        case "Divide":
                            echo $result1 / $result2;
                            break;                    
    }
}

?>
</body>
</html>