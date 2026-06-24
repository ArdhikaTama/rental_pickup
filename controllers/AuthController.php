<?php
class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = sanitize($_POST['username']);
            $password = $_POST['password'];

            $user = $this->userModel->login($username, $password);
            if ($user) {
                Session::start();
                Session::set('user_id', $user['id']);
                Session::set('nama', $user['nama']);
                Session::set('role', $user['role']);
                Session::set('username', $user['username']);
                session_regenerate_id(true);
                redirect('dashboard');
            } else {
                $_SESSION['error'] = "Username atau password salah!";
                redirect('auth/login');
            }
        } else {
            require_once 'views/auth/login.php';
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nama' => sanitize($_POST['nama']),
                'username' => sanitize($_POST['username']),
                'email' => sanitize($_POST['email']),
                'password' => $_POST['password'],
                'role' => 'pelanggan'
            ];

            if ($this->userModel->create($data)) {
                redirect('auth/login');
            }
        } else {
            require_once 'views/auth/register.php';
        }
    }

    public function logout() {
        Session::start();
        Session::destroy();
        redirect('auth/login');
    }
}