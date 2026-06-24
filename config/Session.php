<?php
class Session {
    public static function start() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function get($key) {
        return $_SESSION[$key] ?? null;
    }

    public static function destroy() {
        session_destroy();
        $_SESSION = [];
    }

    public static function checkLogin() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: " . BASE_URL . "auth/login");
            exit;
        }
    }

    public static function checkRole($role) {
        if ($_SESSION['role'] !== $role) {
            header("Location: " . BASE_URL . "dashboard");
            exit;
        }
    }
}