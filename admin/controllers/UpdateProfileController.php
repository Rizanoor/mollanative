<?php
require_once './ProfileController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['user_id'];
    $data = $_POST;
    $file = $_FILES;

    $profileController = new ProfileController();
    $profile = $profileController->updateProfile($id, $data, $file);

    if ($profile) {
        header("Location: ../");
        exit();
    } else {
        $_SESSION['message'] = "Terjadi Kesalahan!";
        $_SESSION['message_type'] = "danger";

        header("Location: ../");
        exit();
    }
}
