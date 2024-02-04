<?php
// Подключение к базе данных
require_once('requiredb.php');
// Получение идентификатора товара из запроса
    $query = "SELECT * FROM storeproduct WHERE idproduct = 1";
    $result = $mysqli->query($query);
    echo var_dump($result);
?>