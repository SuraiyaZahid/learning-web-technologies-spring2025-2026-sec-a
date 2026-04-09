<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>
<body>

<?php
    print("Task 3<br>");

    $num1 = 15;
    $num2 = 40;

    print("Let num1 : {$num1},");
    print(" and num2 : {$num2}<br><br>");
    
    if($num1 % 2 == 0) {
        print("{$num1} is Even<br>");
    } 
    else {
        print("{$num1} is Odd<br>");
    }

    if($num2 % 2 == 0) {
        print("{$num2} is Even<br>");
    } 
    else {
        print("{$num2} is Odd<br>");
    }
?>

</body>
</html>