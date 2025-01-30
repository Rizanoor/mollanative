<?php
require_once __DIR__ . '/../../app/config/database.php';
class UserModel {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function login($email, $password) {
        try {
            $stmt = $this->pdo->prepare("SELECT id, username, password FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verifikasi password
            if ($user && password_verify($password, $user['password'])) {
                return $user;
            }
            return false;
        } catch (PDOException $e) {
            die("Kesalahan query: " . $e->getMessage());
        }
    }
}
