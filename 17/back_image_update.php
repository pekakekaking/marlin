<?php

require_once 'db.php';

$img = $_FILES['image'];
$id = $_GET['id'];

$allowedFiletypes = ['image/jpeg', 'image/png', 'image/jpg'];
if (!in_array($img["type"], $allowedFiletypes)) {
    print_r('Можно загружать файлы только в формате: jpg, png');
    exit;
}

$fileName=$img['name'];
$target_dir = 'uploads/';
$target_file = $target_dir . basename($fileName);
if (!move_uploaded_file($img['tmp_name'], $target_file)) {
    print_r('Ошибка при перемещении файла!');
    exit;
}

$query = "UPDATE posts SET image='$fileName' WHERE id='$id'";
if (!mysqli_query($conn, $query)) {
    print_r( 'Ошибка при сохранении имени файла в базу данных!');
    exit;
}

header("Location:image.php?id=$id");
exit;