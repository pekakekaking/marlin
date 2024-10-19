<?php
session_start();
$host = '127.0.0.1';
$username = 'marlin';
$password = 'marlin';
$database = 'marlin';

$conn = mysqli_connect($host, $username, $password, $database);

$id=$_GET['id'];

$sql="DELETE FROM expenses WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    $_SESSION['success']='Расход успешно удален!';
    header('Location: cost_calculator.php');

} else {
    $_SESSION['error'] = 'Ошибка при удалении расхода!';
}