<?php

require_once 'db.php';

$selectAll = "SELECT * FROM posts LEFT JOIN categories ON categories.id=posts.category_id;";
$result = mysqli_query($conn, $selectAll);
$fetchPosts = mysqli_fetch_all($result);