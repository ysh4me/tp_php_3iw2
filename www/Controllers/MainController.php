<?php
namespace App\Controllers;

class MainController
{
    public function home()
    {
        session_start();
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            include '../Views/home.php';
        } else {
            header('Location: /login');
            exit;
        }
    }
}
