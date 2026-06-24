<?php
class User {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    /**
     * Membuat data user baru (Registrasi Pelanggan)
     */
    public function create($data) {
        $sql = "INSERT INTO users (nama, username, email, password, role, status) 
                VALUES (:nama, :username, :email, :password, :role, :status)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'nama' => $data['nama'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            'role' => $data['role'] ?? 'pelanggan',
            'status' => $data['status'] ?? 1
        ]);
    }

    /**
     * Memvalidasi login pengguna berdasarkan enkripsi password_verify
     */
    public function login($username, $password) {
        $user = $this->findByUsername($username);
        if ($user && password_verify($password, $user['password'])) {
            // Memastikan akun dalam status aktif (1)
            if ($user['status'] == 1) {
                return $user;
            }
        }
        return false;
    }

    /**
     * Mencari pengguna berdasarkan Primary Key (ID)
     */
    public function findById($id) {
        $sql = "SELECT id, nama, username, email, role, status, created_at FROM users WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    /**
     * Mencari pengguna berdasarkan Username (Digunakan untuk validasi registrasi & login)
     */
    public function findByUsername($username) {
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['username' => $username]);
        return $stmt->fetch();
    }

    /**
     * Mencari pengguna berdasarkan Email (Digunakan untuk validasi keunikan email)
     */
    public function findByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email' => $email]);
        return $stmt->fetch();
    }

    /**
     * Memperbarui informasi profil pengguna
     */
    public function update($id, $data) {
        $sql = "UPDATE users SET nama = :nama, email = :email, role = :role, status = :status WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'id' => $id,
            'nama' => $data['nama'],
            'email' => $data['email'],
            'role' => $data['role'],
            'status' => $data['status']
        ]);
    }

    /**
     * Menghapus pengguna secara permanen dari sistem
     */
    public function delete($id) {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }

    /**
     * Menghitung total seluruh user terdaftar untuk kebutuhan widget dashboard
     */
    public function countAll() {
        $sql = "SELECT COUNT(*) as total FROM users";
        $result = $this->db->query($sql)->fetch();
        return $result['total'] ?? 0;
    }
}