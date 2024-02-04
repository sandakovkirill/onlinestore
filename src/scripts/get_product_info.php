<?php
// Подключение к базе данных
require_once('requiredb.php');
// Получение идентификатора товара из запроса
if (isset($_GET['id'])) {
    $productID = $_GET['id'];
    
    // Запрос к базе данных для получения информации о товаре
    $query = "SELECT * FROM storeproduct WHERE idproduct = $productID";
    $result = $mysqli->query($query);
    
    if ($result) {
        $productInfo = $result->fetch_assoc();
        // Отправляем информацию о товаре в формате JSON
        echo json_encode($productInfo);
    } else {
        // Если произошла ошибка при выполнении запроса
        echo json_encode(['error' => 'Failed to fetch product information']);
    }
} else {
    // Если идентификатор товара не был передан
    echo json_encode(['error' => 'Product ID not provided']);
}

// Закрытие соединения с базой данных
$mysqli->close();
?>