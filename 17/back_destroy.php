<?php

require_once 'db.php';

$id=$_GET['id'];
$deleteQuery="DELETE FROM posts WHERE id='$id'";
$deletePost=mysqli_query($conn, $deleteQuery);
header('Location: index.php');
exit;