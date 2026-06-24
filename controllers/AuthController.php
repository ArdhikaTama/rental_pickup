<?php
class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    /**
     * Menangani Autentikasi Masuk Pengguna (Login)
     */
    public function login() {
        Session::start();
        
        // Proteksi: Jika sudah login, langsung lempar ke dashboard
        if (Session::get('user_id')) {
            redirect('dashboard');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = sanitize($_POST['username'] ?? '');
            $password = $_POST['password'] ?? '';

            // Validasi kelengkapan field data
            if (empty($username) || empty($password)) {
                Session::set('error', 'Semua field wajib diisi!');
                redirect('login');
            }

            // Eksekusi pencocokan kredensial melalui model
            $user = $this->userModel->login($username, $password);
            
            if ($user) {
                // Regenerasi ID Sesi untuk mencegah Session Hijacking
                session_regenerate_id(true);
                
                // Menyimpan data otoritas ke dalam Sesi Global
                Session::set('user_id', $user['id']);
                Session::set('nama', $user['nama']);
                Session::set('username', $user['username']);
                Session::set('role', $user['role']);
                Session::set('login_time', date('d M Y, H:i'));
                
                redirect('dashboard');
            } else {
                Session::set('error', 'Username atau password salah / akun dinonaktifkan!');
                redirect('login');
            }
        } else {
            require_once 'views/auth/login.php';
        }
    }

    /**
     * Menangani Pendaftaran Pelanggan Baru (Register)
     */
    public function register() {
        Session::start();
        
        // Proteksi: Jika sudah login, dilarang mengakses halaman registrasi
        if (Session::get('user_id')) {
            redirect('dashboard');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = sanitize($_POST['nama'] ?? '');
            $username = sanitize($_POST['username'] ?? '');
            $email = sanitize($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';
            $confirm_password = $_POST['confirm_password'] ?? '';

            // 1. Validasi Input Kosong
            if (empty($nama) || empty($username) || empty($email) || empty($password)) {
                Session::set('error', 'Semua field data wajib diisi!');
                redirect('register');
            }

            // 2. Validasi Format Email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                Session::set('error', 'Format alamat email tidak valid!');
                redirect('register');
            }

            // 3. Validasi Kekuatan Password Minimal 6 Karakter
            if (strlen($password) < 6) {
                Session::set('error', 'Keamanan password minimal harus 6 karakter!');
                redirect('register');
            }

            // 4. Validasi Kecocokan Konfirmasi Password
            if ($password !== $confirm_password) {
                Session::set('error', 'Konfirmasi password yang Anda masukkan tidak cocok!');
                redirect('register');
            }

            // 5. Validasi Duplikasi Data Username di Database
            if ($this->userModel->findByUsername($username)) {
                Session::set('error', 'Username tersebut sudah terdaftar di sistem!');
                redirect('register');
            }

            // 6. Validasi Duplikasi Data Email di Database
            if ($this->userModel->findByEmail($email)) {
                Session::set('error', 'Alamat email tersebut sudah digunakan akun lain!');
                redirect('register');
            }

            // Penyusunan paket data registrasi aman
            $data = [
                'nama' => $nama,
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'role' => 'pelanggan',
                'status' => 1 // Langsung aktif secara default
            ];

            // Eksekusi penyimpanan data ke model
            if ($this->userModel->create($data)) {
                Session::set('success', 'Pendaftaran akun berhasil! Silakan masuk.');
                redirect('login');
            } else {
                Session::set('error', 'Terjadi kegagalan sistem internal. Silakan coba lagi.');
                redirect('register');
            }
        } else {
            require_once 'views/auth/register.php';
        }
    }

    /**
     * Menangani Proses Penghancuran Sesi (Logout)
     */
    public function logout() {
        Session::destroy();
        redirect('login');
    }
}