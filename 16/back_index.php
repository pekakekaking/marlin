<?php

require_once 'db.php';

$selectAll = "SELECT * FROM tasks";
$result = mysqli_query($conn, $selectAll);
$fetchTasks = mysqli_fetch_all($result);
