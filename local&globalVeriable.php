<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 5;

function Test()  {
    global $a , $b ,$Sum;
     $Sum = $a + $b;

    // echo "the variable inside the function " . $a ."<br>";
}
Test();
echo "The Sum of two nambar :".$Sum;
// Test();
//    echo "the variable outside the function " .$a;

?>
</body>
</html>