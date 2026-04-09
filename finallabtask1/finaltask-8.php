
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8</title>
</head>
<body>
    
</body>
</html>

<?php
    
    $array = [
        ['1', '2', '3', 'A'],
        ['1', '2', 'B', 'C'],
        ['1', 'D', 'E', 'F']
    ];

    echo "Shape 1: Original 2D Array";
    echo "<pre>";

    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col < 4; $col++) {
            echo $array[$row][$col];
            if ($col < 3) {
                echo " ";
            }
        }
        echo "<br>";
    }

    echo "</pre>";


    echo "Shape 2: Shapes to Print";
    echo "<pre>";

    for ($col = 0; $col < 4; $col++) {
        echo $array[0][$col];
        if ($col < 3) {
            echo " ";
        }
    }
    echo "<br>";

    echo $array[1][0] . $array[1][1];
    echo " ";
    echo $array[1][2] . $array[1][3];
    echo "<br>";

    echo $array[2][0];
    echo " ";
    echo $array[2][1] . $array[2][2] . $array[2][3];
    echo "<br>";

    echo "</pre>";
?>
