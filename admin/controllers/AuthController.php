<?php
session_start();
require_once '../models/UserModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $_SESSION['message'] = 'Email dan password tidak boleh kosong.';
        $_SESSION['message_type'] = 'error';
        header("Location: ../");
        exit();
    }

    $userModel = new UserModel();
    $user = $userModel->login($email, $password);

    // Jika login berhasil
    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['username'];
        $_SESSION['message'] = 'Login berhasil! Selamat datang, ' . $user['username'] . '.';
        $_SESSION['message_type'] = 'success';
        header("Location: ../");
        exit();
    } else {
        // Jika login gagal
        $_SESSION['message'] = 'Login gagal. Pastikan email dan password benar.';
        $_SESSION['message_type'] = 'error';
        header("Location: ../");
        exit();
    }
}

