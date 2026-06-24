<?php
// Definisi URL dasar aplikasi secara global
if (!defined('BASE_URL')) {
    define('BASE_URL', 'http://localhost/rental-pickup/');
}

/**
 * Mengenerate URL absolut aplikasi
 */
function base_url($path = '') {
    return BASE_URL . ltrim($path, '/');
}

/**
 * Melakukan pengalihan halaman berdasarkan sistem query routing Phase 2
 * Contoh penggunaan: redirect('dashboard'); akan mengarah ke ?page=dashboard
 */
function redirect($page) {
    header("Location: " . base_url("?page=" . ltrim($page, '/')));
    exit;
}

/**
 * Melakukan sanitasi data input untuk mencegah serangan Cross-Site Scripting (XSS)
 */
function sanitize($data) {
    if (is_array($data)) {
        return array_map('sanitize', $data);
    }
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

/**
 * Memformat angka nominal menjadi format mata uang Rupiah
 */
function formatRupiah($angka) {
    return "Rp " . number_format((float)$angka, 0, ',', '.');
}

/**
 * Menangani proses upload file dokumen/gambar secara aman
 */
function uploadFile($file, $targetDir = "uploads/") {
    // Memastikan direktori target sudah ada
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    $fileName = time() . '_' . preg_replace("/[^a-zA-Z0-9.]/", "_", basename($file["name"]));
    $targetFile = rtrim($targetDir, '/') . '/' . $fileName;
    
    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        return $targetFile;
    }
    return false;
}