<?php

session_start();
$host = '127.0.0.1';
$username = 'marlin';
$password = 'marlin';
$database = 'marlin';

$conn = mysqli_connect($host, $username, $password, $database);

$name = $_POST['text'];
$number = $_POST['number'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO expenses (name,amount) VALUES ('$name','$number')";


if (mysqli_query($conn, $sql)) {
    $_SESSION['success'] = "Расход успешно сохранен!";
    header('Location: cost_calculator.php');
} else {
    echo "Ошибка: " . $sql . "" . mysqli_error($conn);
}
