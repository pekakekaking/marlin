<?php

require_once 'db.php';

$category_id=$_POST['category'];
$post_id=$_GET['id'];

$updateCategoryQuery="UPDATE posts SET category_id='$category_id' WHERE id='$post_id'";
$updateCategory=mysqli_query($conn,$updateCategoryQuery);
header("location:category_select.php?id=$post_id");
exit;