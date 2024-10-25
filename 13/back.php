<?php
session_start();

$length = intval($_POST['length']);

if (isset($length) && ($length < 8 || $length > 20)) {
    $_SESSION['message'] = 'Введите число от 8 до 20 символов';
    header('Location:index.php');
    exit;
}

function generateSymbol($value)
{
    $letters = ['q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm'];
    $specials = ['@', '$', '^'];

    $int = strval(rand(0, 9));
    $letter = $letters[rand(0, count($letters) - 1)];
    $special = $specials[rand(0, count($specials) - 1)];
    $uppercase = strtoupper($letter);

    $randVars = [
        $int,
        $letter,
        $special,
        $uppercase
    ];

    return $randVars[$value];
}

for ($i = 0; $i < ($length - 4); $i++) {
    $password[] = generateSymbol(rand(0, 3));
}

$password[] = generateSymbol(0);
$password[] = generateSymbol(1);
$password[] = generateSymbol(2);
$password[] = generateSymbol(3);

$_SESSION['password'] = implode($password);

header('Location:index.php');
exit;