<?php
session_start();

$comment = $_POST['comment'];
$error='';

if(empty($comment)) {
    $error='Поле не может быть пустым';
    $_SESSION['error']=$error;
    header('Location:simple_form.php');
    echo $error;
}

$host = '127.0.0.1';
$username = 'marlin';
$password = 'marlin';
$database = 'marlin';


if ($error==''){

$conn = mysqli_connect($host, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO comments (comment) VALUES ('$comment')";

if (mysqli_query($conn, $sql)) {
    $_SESSION['success']="Комментарий успешно сохранен!";
} else {
    echo "Ошибка: " . $sql . "" . mysqli_error($conn);
}

if(isset($_SESSION['success'])) {
    echo  '<div class="alert alert-success">' . $_SESSION['success'] . '</div>';
    unset($_SESSION['success']);
}
}
