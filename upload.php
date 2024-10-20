<?php

require_once 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location:11.file.php');
    exit;
}
if (!isset($_FILES['user_avatar']) || $_FILES['user_avatar']['error'] !== UPLOAD_ERR_OK) {
    $_SESSION['error'] = 'Ошибка при загрузке файла!';
    header('Location:11.file.php');
    exit;
}

$filename = $_FILES['user_avatar']['name']; // Получаем имя файла
$filetype = $_FILES['user_avatar']['type']; // Получаем MIME-тип файла
$tmp_name = $_FILES['user_avatar']['tmp_name']; // Получаем временный путь к файлу

$allowedFiletypes = ['image/jpeg', 'image/png', 'image/jpg'];

if (!in_array($filetype, $allowedFiletypes)) {
    $_SESSION['error'] = 'Можно загружать файлы только в формате: jpg, png';
    header('Location:11.file.php');
    exit;
}

$target_dir = 'uploads/';
$target_file = $target_dir . basename($filename);
if (!move_uploaded_file($tmp_name, $target_file)) {
    $_SESSION['error'] = 'Ошибка при перемещении файла!';
    header('Location:11.file.php');
    exit;
}

$sql = "INSERT INTO images (filename) VALUES ('$filename')";
if (!mysqli_query(dbConnect(), $sql)) {
    $_SESSION['error'] = 'Ошибка при сохранении имени файла в базу данных!';
    header('Location:11.file.php');
    exit;
}

$_SESSION['success']='Изображение успешно загружено!';
header('Location:11.file.php');
exit;