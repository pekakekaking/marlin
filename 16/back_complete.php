<?php

require_once 'db.php';

if (isset($_GET['complete']) && $_GET['complete'] == '1') {
    $id = $_GET['id'];
    $completeQuery = "UPDATE tasks SET is_completed='1' WHERE id='$id'";
    $updateComplete = mysqli_query($conn, $completeQuery);
    unset($_GET['complete']);
    unset($_GET['id']);
    header('Location: index.php');
    exit;
}

if (isset($_GET['complete']) && $_GET['complete'] !== '1') {
    $id = $_GET['id'];
    $completeQuery = "UPDATE tasks SET is_completed='0' WHERE id='$id'";
    $updateComplete = mysqli_query($conn, $completeQuery);
    unset($_GET['complete']);
    unset($_GET['id']);
    header('Location: index.php');
    exit;
}
