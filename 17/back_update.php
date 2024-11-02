<?php

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $content = $_POST['content'];
    $id = $_GET['id'];
    $insertQuery = "UPDATE posts SET name='$name', content='$content' WHERE id='$id'";
    $insertPost = mysqli_query($conn, $insertQuery);
    header('Location: index.php');
    exit;
}