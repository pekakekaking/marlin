<?php


$host = '127.0.0.1';
$username = 'marlin';
$password = 'marlin';
$database = 'marlin';
$conn = mysqli_connect($host, $username, $password, $database);

$id=$_GET['id'];


$query = "SELECT posts.name, categories.name, categories.id FROM posts LEFT JOIN categories ON categories.id=posts.category_id WHERE posts.id='$id' ;";
$query .= "SELECT id, name FROM categories";
mysqli_multi_query($conn,$query) or die("MySQL Error: " . mysqli_error($conn) . "<hr>\nQuery: $query");;
$fetchPost = mysqli_fetch_all(mysqli_store_result($conn));
$name=$fetchPost[0][0];
$categoryCurrent=$fetchPost[0][1];
$categoryCurrentId=$fetchPost[0][2];

mysqli_next_result($conn);
$fetchCategories = mysqli_fetch_all(mysqli_store_result($conn));
