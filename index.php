<?php
// Memuat berkas konfigurasi sistem utama secara terpusat
require_once 'config/Config.php';
require_once 'config/Database.php';
require_once 'config/Session.php';
require_once 'config/Helper.php';
require_once 'models/User.php';

// Menginisialisasi manajemen sesi global
Session::start();

// Menangkap parameter halaman dari query string URL (?page=nama_halaman). Default ke 'home'
$page = $_GET['page'] ?? 'home';

// Sistem Routing Inti Phase 2 berbasis Switch-Case Engine
switch ($page) {
    case 'home':
        require_once 'controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;

    case 'login':
        require_once 'controllers/AuthController.php';
        $controller = new AuthController();
        $controller->login();
        break;

    case 'register':
        require_once 'controllers/AuthController.php';
        $controller = new AuthController();
        $controller->register();
        break;

    case 'logout':
        require_once 'controllers/AuthController.php';
        $controller = new AuthController();
        $controller->logout();
        break;

    case 'dashboard':
        require_once 'controllers/DashboardController.php';
        $controller = new DashboardController();
        $controller->index();
        break;

    default:
        // Menangani request halaman yang tidak terdaftar di dalam sistem routing
        header("HTTP/1.0 404 Not Found");
        echo "<div style='font-family: Arial, sans-serif; text-align: center; padding-top: 10%;'>";
        echo "<h1 style='font-size: 50px; color: #ff7a00; margin-bottom: 10px;'>404</h1>";
        echo "<p style='color: #666; font-size: 18px;'>Halaman yang Anda tuju tidak ditemukan.</p>";
        echo "<a href='" . base_url() . "' style='color: #fff; background: #ff7a00; text-decoration: none; padding: 10px 20px; border-radius: 5px; display: inline-block; mt-3; font-weight: bold;'>Kembali ke Beranda</a>";
        echo "</div>";
        break;
}