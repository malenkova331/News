<?php
$mysqli = new mysqli("localhost", "root", "", "news_db", 3306);

if ($mysqli->connect_error) {
    die("Ошибка подключения: " . $mysqli->connect_error);
}

$sql = "SELECT id, date, title, announce, content, image FROM news";
$result = $mysqli->query($sql);
$all_news = $result->fetch_all(MYSQLI_ASSOC);

$mysqli->close();
?>