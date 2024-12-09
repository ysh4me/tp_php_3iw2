<?php
namespace App\Controllers;

class UserController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $pdo = new \PDO('sqlite:../Views/database.db');
            $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
            $stmt->execute([$email]);
            $user = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user'] = $user;
                header('Location: /');
                exit;
            } else {
                echo "Identifiants incorrects.";
            }
        }

        include '../Views/login.php';
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $pdo = new \PDO('sqlite:../Views/database.db');
            $stmt = $pdo->prepare('INSERT INTO users (firstname, lastname, email, phone, civility, password) VALUES (?, ?, ?, ?, ?, ?)');

            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            try {
                $stmt->execute([
                    $_POST['firstname'],
                    $_POST['lastname'],
                    $_POST['email'],
                    $_POST['phone'],
                    $_POST['civility'],
                    $password
                ]);
                header('Location: /login');
                exit;
            } catch (\PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
        }

        include '../Views/register.php';
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /login');
        exit;
    }

}
