<?php
session_start();
require_once '../models/UserModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header("Location: ../../login.php?error=empty_fields");
        exit();
    }

    $userModel = new UserModel();
    $user = $userModel->login($email, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['username'];
        header("Location:../");
        exit();
    } else {
        header('location:login/');
        exit();
    }

    var_dump($_SESSION);
    exit;
}
