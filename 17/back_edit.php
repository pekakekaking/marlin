<?php

require_once 'db.php';

$id = $_GET['id'];
$showQuery = "SELECT name,content FROM posts WHERE id='$id' ";
$showPost = mysqli_query($conn, $showQuery);
$fetchTask = mysqli_fetch_all($showPost);
$name = $fetchTask[0][0];
$content = $fetchTask[0][1];