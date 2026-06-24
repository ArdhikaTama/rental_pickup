<?php
class DashboardController {
    public function index() {
        Session::start();
        Session::checkLogin();
        
        $userModel = new User();
        $totalUsers = $userModel->countAll();
        
        require_once 'views/dashboard/index.php';
    }
}