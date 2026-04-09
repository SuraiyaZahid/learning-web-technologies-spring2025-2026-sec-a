
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7</title>
</head>
<body>
    
</body>
</html>

<?php


    $stars = ["*", "**", "***"];
    $numbers = ["123", "12", "1"];
    $letters = ["A", "BC", "DEF"];

    echo "<pre>"; // The <pre> tag tells the browser: "Display this text exactly as written — don't remove spaces or line breaks"

    for ($row = 0; $row < 3; $row++) {
        echo $stars[$row] . "\t";  
        
        echo $numbers[$row] . "\t";
        
        for ($i = 0; $i < strlen($letters[$row]); $i++) {
            echo $letters[$row][$i];
            if ($i < strlen($letters[$row]) - 1) {
                echo " "; 
            }
        }
        
        echo "<br>";
    }

    echo "</pre>";
?>
