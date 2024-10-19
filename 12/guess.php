<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quest = $_POST['quest'];
}

if (isset($quest)) {
    if (!ctype_digit($quest) || (intval($quest, 10) < 1 || intval($quest, 10) > 20)) {
        $_SESSION['error'] = 'please enter the number between 1 and 20';
    header('Location: index.php');
    exit;
    }
    if ($quest>$_SESSION['answer']) {
        $_SESSION['error'] = 'Загаданное число меньше.';
        $_SESSION['trys']--;
        header('Location: index.php');
        exit;
    }
    if ($quest<$_SESSION['answer']) {
        $_SESSION['error'] = 'Загаданное число больше.';
        $_SESSION['trys']--;
        header('Location: index.php');
        exit;
    }

    $_SESSION['error'] = "Вы угадали! Загаданное число ". $_SESSION['answer'];
    $_SESSION['win']=1;
    header('Location: index.php');
    exit;
}

