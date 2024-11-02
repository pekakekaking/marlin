<?php

require_once 'db.php';

$selectAll = "SELECT * FROM categories;";
$selectAll.= "SELECT category_id, COUNT(id) as count FROM posts GROUP BY category_id;";
mysqli_multi_query($conn, $selectAll);
$result = mysqli_store_result($conn);
$fetchCategories = mysqli_fetch_all($result);
mysqli_next_result($conn);
$postCount= mysqli_store_result($conn);
$fetchCount= mysqli_fetch_all($postCount);
