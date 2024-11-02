<?php

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name=$_POST['name'];
    $insertQuery="INSERT INTO categories (name) VALUES ('$name')";
    $insertTask=mysqli_query($conn,$insertQuery);
    header('Location: category_index.php');
    exit;
}