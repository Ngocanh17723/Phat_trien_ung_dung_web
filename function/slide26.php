<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h3>Pham Ngoc Anh</h3>
    <from action="" method="get">
        <input type="number" name="amount">
        <p>2121050437</p>
        <select name="currency">
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="SGD">SINGAPORE DOLLAR</option>
            <option value="JPY">JAPANESE YEN</option>
        </select>
        <input type="submit" value="Covert">
    </from>
</body>
<?php
$exchangeRate = array("USD" => 22300, "URE" => 27300, "SGD" => 17000, "JPY" => 120);
if (isset($_Get['$amount']))
{
    $amount = $_GET['$amount'];
    $current = $_GET['current'];
    echo "$amount USD is equal" . number_format($amount * $exchangeRate[$current]) . "VND";
}
?>

</html>