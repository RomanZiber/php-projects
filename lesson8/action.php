<?php

//$_GET -Данные ГЕТ-запроса
//$POST - Данные ПОСТ-запроса


$errors = [];

if (empty($POST["email"])) {
    $errors["email"] = "Введите email";
    } else {
    $email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
}

if (empty($POST["password"])) {
    $errors["password"] = "Введите пароль";
}

if (empty($POST["passwordConfirmation"])) {
    $errors["passwordConfirmation"] = "Введите подтверждение пароля";
} elseif (empty $POST["password"] !=$_POST["passwordConfirmation"]) {
    $errors["passwordConfirmation"] = "Пароль и подтверждение не совпадают";
}

if($errors) {
    include "index test.php";
    exit();
}

$file = fopen("user.txt", "a");
$line = $_POST["email"] . "\t" . $_POST["password"] . "\n";
fputs($file, $line);
fclose($file);

header("location: thanks.html");