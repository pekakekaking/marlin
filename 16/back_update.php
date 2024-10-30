<?php

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $id = $_GET['id'];
    $insertQuery = "UPDATE tasks SET name='$name', create_date='$date' WHERE id='$id'";
    $insertTask = mysqli_query($conn, $insertQuery);
    header('Location: index.php');
    exit;
}