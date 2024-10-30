<?php

require_once 'db.php';

$id = $_GET['id'];
$showQuery = "SELECT name,create_date FROM tasks WHERE id='$id' ";
$showTask = mysqli_query($conn, $showQuery);
$fetchTask = mysqli_fetch_all($showTask);
$name = $fetchTask[0][0];
$date = $fetchTask[0][1];