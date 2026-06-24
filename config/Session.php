<?php
class Session {
    // Memastikan session aktif secara aman
    public static function start() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Menyimpan data ke dalam session
    public static function set($key, $value) {
        self::start();
        $_SESSION[$key] = $value;
    }

    // Mengambil data dari session
    public static function get($key) {
        self::start();
        return $_SESSION[$key] ?? null;
    }

    // Menghancurkan session (Logout)
    public static function destroy() {
        self::start();
        session_destroy();
        $_SESSION = [];
    }

    // Proteksi halaman internal (Wajib Login) sesuai Routing Phase 2
    public static function checkLogin() {
        self::start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: " . BASE_URL . "?page=login");
            exit;
        }
    }

    // Proteksi Otorisasi Hak Akses (Mendukung Single Role maupun Multi-Roles dalam bentuk Array)
    public static function checkRole($allowedRoles) {
        self::start();
        self::checkLogin();
        
        $currentRole = $_SESSION['role'] ?? '';
        
        // Jika parameter yang dikirim berupa string tunggal, konversi menjadi array
        if (!is_array($allowedRoles)) {
            $allowedRoles = [$allowedRoles];
        }
        
        // Jika role user tidak ada dalam daftar hak akses yang diizinkan
        if (!in_array($currentRole, $allowedRoles)) {
            header("Location: " . BASE_URL . "?page=dashboard");
            exit;
        }
    }
}