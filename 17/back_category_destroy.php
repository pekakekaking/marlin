<?php

require_once 'db.php';

$id=$_GET['id'];
$deleteQuery="DELETE FROM categories WHERE id='$id'";
$deleteCategory=mysqli_query($conn, $deleteQuery);
header('Location: category_index.php');
exit;