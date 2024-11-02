<?php

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name=$_POST['name'];
    $content=$_POST['content'];
    $insertQuery="INSERT INTO posts (name,content) VALUES ('$name','$content')";
    $insertTask=mysqli_query($conn,$insertQuery);
    header('Location: index.php');
    exit;
}