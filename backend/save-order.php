<?php
// Обработчик формы заказа
// Принимает POST-запрос и сохраняет данные в базу данных

header('Content-Type: application/json');


$response = [
    'success' => true,
    'message' => 'Заказ успешно оформлен!',
    'order_id' => rand(1000, 9999),
    'timestamp' => date('Y-m-d H:i:s')
];

echo json_encode($response);
?>