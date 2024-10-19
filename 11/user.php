<?php
require_once 'db.php';


$email=$_POST['email'];
$password=$_POST['password'];


mysqli_query( mysqli_connect("127.0.0.1", "marlin", "marlin", "marlin"), "INSERT INTO users (email, password) VALUES ('$email','$password')");
header('Location: login.php');
exit;