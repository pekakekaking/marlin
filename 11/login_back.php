<?php
require_once 'db.php';
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$passwordHash=hash('sha256',$password);
var_dump($passwordHash);

$result=mysqli_query(mysqli_connect("127.0.0.1", "marlin", "marlin", "marlin"), "SELECT * FROM users WHERE email='$email' AND password = '$passwordHash'");
$user = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($user[0])) {
    $_SESSION['user_id'] = $user[0]['id'];
    header('Location: index.php');
}