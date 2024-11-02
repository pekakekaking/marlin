<?php

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $id = $_GET['id'];
    $insertQuery = "UPDATE categories SET name='$name' WHERE id='$id'";
    $insertCategory = mysqli_query($conn, $insertQuery);
    header('Location: category_index.php');
    exit;
}