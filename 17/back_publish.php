<?php

require_once 'db.php';

if (isset($_GET['publish']) && $_GET['publish'] == '1') {
    $id = $_GET['id'];
    $publishQuery = "UPDATE posts SET is_published='1' WHERE id='$id'";
    $updatePublish = mysqli_query($conn, $publishQuery);
    unset($_GET['publish']);
    unset($_GET['id']);
    header('Location: show.php?id='.$id);
    exit;
}

if (isset($_GET['publish']) && $_GET['publish'] !== '1') {
    $id = $_GET['id'];
    $publishQuery = "UPDATE posts SET is_published='0' WHERE id='$id'";
    $updatePublish = mysqli_query($conn, $publishQuery);
    unset($_GET['publish']);
    unset($_GET['id']);
    header('Location: show.php?id='.$id);
    exit;
}