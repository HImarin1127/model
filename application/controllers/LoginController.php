<?php
require_once __DIR__ . '/../models/UserModel.php';

class LoginController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function index() {
        $error = null;
        include __DIR__ . '/../views/login_view.php';
    }

    public function authenticate() {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        if ($this->model->validate($username, $password)) {
            $_SESSION['user'] = $username;
            header('Location: index.php?c=login&m=dashboard');
            exit;
        } else {
            $error = 'Invalid credentials';
            include __DIR__ . '/../views/login_view.php';
        }
    }

    public function dashboard() {
        if (!isset($_SESSION['user'])) {
            header('Location: index.php');
            exit;
        }
        $user = $_SESSION['user'];
        include __DIR__ . '/../views/dashboard_view.php';
    }

    public function logout() {
        session_destroy();
        header('Location: index.php');
    }
}
