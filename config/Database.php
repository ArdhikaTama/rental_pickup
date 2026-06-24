<?php
class Database {
    private static $instance = null;
    private $conn;

    private function __construct() {
        // Konfigurasi internal yang disinkronkan dengan phpMyAdmin
        $host = 'localhost';
        $dbname = 'rental-pickup'; 
        $username = 'root';
        $password = '';

        try {
            // Menggunakan DSN lengkap dengan charset UTF8MB4 untuk fleksibilitas enterprise
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
            
            $this->conn = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false // Memaksa native prepared statement demi keamanan SQL Injection
            ]);
        } catch (PDOException $e) {
            die("Database Connection Error: " . $e->getMessage());
        }
    }

    // Penerapan Singleton Pattern
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance->conn;
    }
}