<?php
$servername = "127.0.0.1";
$username = "root";
$pass = "kali";
$dbName = "first";

$link = mysqli_connect($servername, $username, $pass);

if (!$link) {
  die("Ошибка подключения: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbName";

if (!mysqli_query($link, $sql)) {
  echo "Не удалось создать БД" . mysqli_error($link);
}

mysqli_close($link);

$link = mysqli_connect($servername, $username, $pass, $dbName);

$sql = "CREATE TABLE IF NOT EXISTS users(
    id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(20) NOT NULL
)";

if(!mysqli_query($link, $sql)) {
    echo "Не удалось создать таблицу Users" . mysqli_error($link);
}
$sql = "CREATE TABLE IF NOT EXISTS posts(
    id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(15) NOT NULL,
    main_text VARCHAR(400) NOT NULL
)";
if(!mysqli_query($link, $sql)) {
    echo "Не удалось создать таблицу Posts" . mysqli_error($link);
}

mysqli_close($link);


?>