<?php
require_once __DIR__ . '/../../app/config/database.php';

class UserModel
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function login($email, $password)
    {
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

    public function updateAccountData($data)
    {
        try {
            $query = "UPDATE users SET email = :email, username = :username";
            
            // Hanya update password jika diisi
            if (!empty($data['password'])) {
                $query .= ", password = :password";
            }
            
            $query .= " WHERE id = :id";

            $stmt = $this->pdo->prepare($query);

            // Bind parameter
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':username', $data['username']);
            if (!empty($data['password'])) {
                $hashedPassword = password_hash($data['password'], PASSWORD_BCRYPT);
                $stmt->bindParam(':password', $hashedPassword);
            }
            $stmt->bindParam(':id', $_SESSION['user_id'], PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            die("Kesalahan query: " . $e->getMessage());
        }
    }

    public function getAccountData($userId)
    {
        try {
            $stmt = $this->pdo->prepare("SELECT email, username FROM users WHERE id = :id");
            $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Kesalahan query: " . $e->getMessage());
        }
    }
}
