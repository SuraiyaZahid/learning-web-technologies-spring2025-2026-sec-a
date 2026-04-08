<!DOCTYPE html>
<html>
<head>
    <title>VAT Calculator</title>
</head>
<body>

<h2>VAT Calculator (15%)</h2>

<form method="post">
    Amount: <input type="number" name="amount" required>
    <input type="submit" name="calculate" value="Calculate VAT">
</form>

<?php
if(isset($_POST['calculate'])) {

    $amount = $_POST['amount'];
    $vat = $amount * 0.15;
    $total = $amount + $vat;

    echo "<h3>Result:</h3>";
    echo "Amount = " . $amount . "<br>";
    echo "VAT (15%) = " . $vat . "<br>";
    echo "Total Amount = " . $total;
}
?>

</body>
</html>