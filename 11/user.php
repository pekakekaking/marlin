<?php
require_once 'db.php';
session_start();

$email=$_POST['email'];
$password=$_POST['password'];
$passwordConfirm=$_POST['confirm-password'];

if ($password!==$passwordConfirm) {
    $_SESSION['message']="The password field confirmation does not match.";
    header('Location: register.php');
    exit;
}

$existingEmail=mysqli_query(mysqli_connect("127.0.0.1", "marlin", "marlin", "marlin"),"SELECT * FROM users WHERE email = '$email'");
$existingEmailFetch = mysqli_fetch_all($existingEmail, MYSQLI_ASSOC);
if (isset($existingEmailFetch[0])) {
    $_SESSION['message']="Entered e-mail already registered.";
    header('Location: register.php');
    exit;
}

$passwordHash=hash('sha256',$password);

mysqli_query( mysqli_connect("127.0.0.1", "marlin", "marlin", "marlin"), "INSERT INTO users (email, password) VALUES ('$email','$passwordHash')");
header('Location: login.php');
exit;