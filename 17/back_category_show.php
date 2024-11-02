<?php

require_once 'db.php';

$id = $_GET['id'];
$showQuery = "SELECT name FROM categories WHERE id='$id' ";
$showCategory = mysqli_query($conn, $showQuery);
$fetchCategory = mysqli_fetch_all($showCategory);
$name = $fetchCategory[0][0];