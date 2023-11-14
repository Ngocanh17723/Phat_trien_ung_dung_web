<?php
$USD = 22300;
$EUR = 27300;
$SGD = 17000;
$JPY = 120;
$amount = $_GET['$amount'];
echo "$amount USD is equal";
if ($_GET["currency"] == "USD") {
    echo $amount * $USD;
}
if ($_GET["currency"] == "EUR") {
    echo $amount * $EUR;
}
if ($_GET["currency"] == "SGD") {
    echo $amount * $SGD;
} else {
    echo $amount * $JPY;
}
echo "VND";
?>