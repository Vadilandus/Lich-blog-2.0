<?php

require_once('db.php');

$login = $_POST["login"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];
$email = $_POST["email"];


if (empty($login) || empty($pass) || empty($pass2) || empty($email)){
    echo 'Заполните все поля';
} else
{
    if ($pass != $pass2){
        echo 'Пароли не совпадают';
    } else{
        $sql = "INSERT INTO user (login, email, pass) VALUES ('$login', '$email', '$pass')";
        if ($conn -> query($sql) === TRUE){
            echo 'Успешная регистрация';
        }else{
            echo "ошибка: " . $conn->error;
        }
    }
}