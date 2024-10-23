<?php

session_start();

$usd = 95.75;
$eur = 103.41;
$gpb = 124.33;

$exchangeRates = array(
    'usd' => $usd,
    'eur' => $eur,
    'gpb' => $gpb
);

$sum = $_POST['sum'];

if (isset($sum) && $sum <= 0) {
    $_SESSION['message'] = 'The value must be a positive number';
    header('Location:index.php');
    exit;
}
$currency = htmlspecialchars($_POST['currency']);
$rate = $exchangeRates["$currency"];
$result = round($sum * $rate,2);
$_SESSION['result']=$result;
$_SESSION['currency']=$currency;
$_SESSION['sum']=$sum;


header('Location:index.php');
exit;