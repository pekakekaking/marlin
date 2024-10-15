<?php

$comment = $_POST['comment'];

$host = '127.0.0.1';
$username = 'marlin';
$password = 'AfiDAr3E6LfD6i4S';
$database = 'marlin';

// Подключение к базе данных
$conn = mysqli_connect($host, $username, $password, $database);

// Проверка соединения
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO comments (comment) VALUES ('$comment')";

// Выполнение запроса
if (mysqli_query($conn, $sql)) {
    echo "Комментарий успешно сохранен!";
} else {
    echo "Ошибка: " . $sql . "" . mysqli_error($conn);
}