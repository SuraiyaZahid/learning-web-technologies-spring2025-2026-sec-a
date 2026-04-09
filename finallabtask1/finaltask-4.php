<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
</head>
<body>

<?php
   
    $num1 = 17;
    $num2 = 93;
    $num3 = 56;

    if ($num1 >= $num2 && $num1 >= $num3) {
        $largest = $num1;
    } 
    elseif ($num2 >= $num1 && $num2 >= $num3) {
        $largest = $num2;
    } 
    else {
        $largest = $num3;
    }

    echo "The three numbers are: $num1, $num2, $num3 <br>";
    echo "The largest number is: $largest";
    
?>

</body>
</html>