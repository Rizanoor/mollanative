<?php
require_once '../models/UserModel.php';

class AccountController
{
    public function __construct()
    {
        session_start();
    }

    public function updateAccount($data)
    {
        // Validasi input
        if (empty($data['email']) || empty($data['username'])) {
            $_SESSION['message'] = "Email and username cannot be empty.";
            $_SESSION['message_type'] = "danger";
            header("Location: ../index.php?account=true");
            exit();
        }

        // Siapkan data untuk diupdate
        $updateData = [
            'email' => trim($data['email']),
            'username' => trim($data['username']),
            'password' => !empty($data['password']) ? trim($data['password']) : null, // Password opsional
        ];

        // Update data melalui model
        $model = new UserModel();
        $result = $model->updateAccountData($updateData);

        if ($result) {
            $_SESSION['message'] = "Account settings updated successfully!";
            $_SESSION['message_type'] = "success";
        } else {
            $_SESSION['message'] = "Failed to update account settings.";
            $_SESSION['message_type'] = "danger";
        }

        header("Location: ../index.php?account=true");
        exit();
    }
}

// Tangkap request POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new AccountController();
    $controller->updateAccount($_POST);
}
