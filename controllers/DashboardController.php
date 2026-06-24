<?php
class DashboardController {
    private $userModel;

    public function __construct() {
        // Inisialisasi model secara terpusat pada objek controller
        $this->userModel = new User();
    }

    /**
     * Menampilkan Halaman Utama Dashboard (Sistem Internal Backend)
     */
    public function index() {
        // Proteksi Keamanan: Validasi Sesi Otentikasi Masuk Pengguna
        Session::checkLogin();
        
        // Mengambil metrik data dinamis dari database untuk komponen widget card
        $totalUsers = $this->userModel->countAll();
        
        // Memuat berkas antarmuka grafis (View) Dashboard Core Phase 2
        require_once 'views/dashboard/dashboard.php';
    }
}