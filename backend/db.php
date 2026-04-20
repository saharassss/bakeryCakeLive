<?php
// Подключение к базе данных MySQL

require_once 'config.php';

class Database {
    private $connection;
    
    public function __construct() {
        
        $this->connection = null;
    }
    
    public function getConnection() {
        return $this->connection;
    }
    
    public function saveOrder($name, $phone, $address, $product) {
        // Метод для сохранения заказа в БД
        return true;
    }
    
    public function saveReview($name, $rating, $text) {
        // Метод для сохранения отзыва в БД
        return true;
    }
}
?>