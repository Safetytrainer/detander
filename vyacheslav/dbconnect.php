<?php
    // кодировка utf-8
    header('Content-Type: text/html; charset=utf-8');

    $server = "localhost";  // имя хоста
    $username = "server";   // Имя пользователя БД
    $password = "password"; // Пароль пользователя, если нет пароля то, оставляем пустым
    $database = "slav";     // Имя базы данных
 
    // подключение к базе данных через MySQLi
    $mysqli = new mysqli($server, $username, $password, $database);
 
    if (mysqli_connect_errno()) { 
        echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
        exit(); 
    }

    // кодировка подключения
    $mysqli->set_charset('utf8');

    // для удобства, добавим здесь переменную, которая будет содержать название нашего сайта
    $address_site = "http://91.202.71.251:60966/vyacheslav";
?>
