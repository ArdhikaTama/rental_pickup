<?php
function base_url($path = '') {
    return BASE_URL . ltrim($path, '/');
}

function redirect($path) {
    header("Location: " . base_url($path));
    exit;
}

function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

function uploadFile($file, $targetDir = "uploads/") {
    $targetFile = $targetDir . basename($file["name"]);
    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        return $targetFile;
    }
    return false;
}