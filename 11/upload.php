<?php
require_once 'db.php';
session_start();


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['error'] = 'Only POST requests are allowed';
    header('Location: index.php');
    exit;
}

if (!isset($_FILES['file'])) {
    $_SESSION['error'] = 'No file was uploaded';
    header('Location: index.php');
    exit;
}

$allowed = array('image/jpeg', 'image/png', 'image/jpg');
foreach ($_FILES['file']['type'] as $fileType) {
    if (!in_array($fileType, $allowed)) {
        $_SESSION['error'] = 'Invalid file type';
        header('Location: index.php');
        exit;
    }
}

foreach ($_FILES['file']['tmp_name'] as $number => $name) {
    if (!move_uploaded_file($name, 'uploads/' . basename($_FILES['file']['name'][$number]))) {
        $_SESSION['error'] = 'There was an error uploading your file';
        header('Location: index.php');
        exit;
    }
}
$user_id=$_SESSION['user_id'];

foreach ($_FILES['file']['name'] as $filename) {
    if (!mysqli_query((new dbbbb)->connect(), "INSERT INTO images (filename,user_id) VALUES ('$filename',$user_id)")) {
        $_SESSION['error'] = 'There was an error saving your file';
        header('Location: index.php');
        exit;
    }
}

$_SESSION['success'] = 'File was uploaded successfully';
header('Location: index.php');
exit;