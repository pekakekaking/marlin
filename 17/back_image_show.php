<?php

require_once 'db.php';

$id = $_GET['id'];
$showQuery = "SELECT * FROM posts WHERE posts.id='$id';";
mysqli_multi_query($conn, $showQuery);
$showPost = mysqli_store_result($conn);
$fetchPost = mysqli_fetch_all($showPost);
$postId = $fetchPost[0][0];
$name = $fetchPost[0][1];
$content = $fetchPost[0][2];
$category_id = $fetchPost[0][3];
$look = $fetchPost[0][4];
$is_published = $fetchPost[0][5];
$image = $fetchPost[0][6];
mysqli_next_result($conn);