<?php

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name=$_POST['name'];
    $date=$_POST['date'];
    $insertQuery="INSERT INTO tasks (name,create_date) VALUES ('$name','$date')";
    $insertTask=mysqli_query($conn,$insertQuery);
    header('Location: index.php');
    exit;
}