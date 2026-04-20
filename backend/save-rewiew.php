<?php
// Обработчик формы отзыва

header('Content-Type: application/json');

$response = [
    'success' => true,
    'message' => 'Спасибо за ваш отзыв!',
    'review_id' => rand(1000, 9999),
    'timestamp' => date('Y-m-d H:i:s')
];

echo json_encode($response);
?>