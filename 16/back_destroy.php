<?php

require_once 'db.php';

$id=$_POST['task_id'];
$deleteQuery="DELETE FROM tasks WHERE id='$id'";
$deleteTask=mysqli_query($conn, $deleteQuery);
header('Location: index.php');
exit;