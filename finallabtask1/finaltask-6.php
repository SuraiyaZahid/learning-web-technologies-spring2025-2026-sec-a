<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6</title>
</head>
<body>

<?php
    // numeric array
    $numbers = [5, 18, 27, 34, 46, 52, 63, 71, 88, 95];
    $search = 34;
    $found = false;

    for ($i=0; $i<count($numbers); $i++) {
        if ($numbers[$i] == $search) {
            $found = true;
            break;
        }
    }

    if($found) {
        echo "Found.";
    } else {
        echo "Not found.";
    }

    echo "<br>Array elements: ";
    for ($i = 0; $i < count($numbers); $i++) {
        echo $numbers[$i] . " ";
    }

?>

</body>
</html>