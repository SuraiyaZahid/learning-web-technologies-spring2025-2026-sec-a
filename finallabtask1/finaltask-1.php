<!DOCTYPE html>
<html>
<head>
    <title>Rectangle Area & Perimeter</title>
</head>
<body>

<h2>Rectangle Calculator</h2>

<form method="post">
    Length: <input type="number" name="length" required><br><br>
    Width: <input type="number" name="width" required><br><br>
    <input type="submit" name="calculate" value="Calculate">
</form>

<?php
if(isset($_POST['calculate'])) {
    
    $length = $_POST['length'];
    $width = $_POST['width'];

    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "<h3>Result:</h3>";
    echo "Area of Rectangle = " . $area . "<br>";
    echo "Perimeter of Rectangle = " . $perimeter;
}
?>

</body>
</html>