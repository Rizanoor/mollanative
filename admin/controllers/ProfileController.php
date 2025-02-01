<?php

require_once __DIR__ . '/../models/ProfileModel.php';
class ProfileController
{
    private $profileModel;

    public function __construct()
    {
        $this->profileModel = new ProfileModel();
    }

    public function getProfile($id)
    {
        $profile = $this->profileModel->getProfileByUserId($id);

        if ($profile) {
            return $profile;
        } else {
            return null;
        }
    }

    public function updateProfile($id, $data, $file)
    {
        session_start();
        $profileModel = new ProfileModel();

        // Validasi data input
        if (empty($data['name']) || empty($data['email'])) {
            $_SESSION['message'] = "Nama dan Email tidak boleh kosong!";
            $_SESSION['message_type'] = "danger";
            header("Location: ../");
            exit();
        }

        // Update profile
        $profile = $profileModel->updateProfileById($id, $data);

        // Periksa jika ada file yang diupload
        if ($profile && isset($file['hero_photo']['name']) && $file['hero_photo']['error'] == 0) {
            $photoPath = $this->uploadHeroPhoto($file['hero_photo']);
            if ($photoPath) {
                $profileModel->updateHeroPhoto($id, $photoPath);
            }
        }

        $_SESSION['message'] = "Profil berhasil diperbarui!";
        $_SESSION['message_type'] = "success";
        header("Location: ../");
        exit();
    }

    private function uploadHeroPhoto($file)
    {
        session_start();
        $targetDir = '../uploads/';
        $targetFile = $targetDir . basename($file['name']);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Validasi ekstensi file
        if (!getimagesize($file['tmp_name']) || $imageFileType != 'jpg') {
            $_SESSION['message'] = "Ekstensi file harus jpg!";
            $_SESSION['message_type'] = "danger";
            header("Location: ../");
            exit();
        }

        // Validasi ukuran file
        if ($file['size'] > 2 * 1024 * 1024) {
            $_SESSION['message'] = "Size file terlalu besar! Maksimal 2MB.";
            $_SESSION['message_type'] = "danger";
            header("Location: ../");
            exit();
        }

        // Periksa jika file sudah ada
        if (file_exists($targetFile)) {
            $_SESSION['message'] = "File sudah ada!";
            $_SESSION['message_type'] = "danger";
            header("Location: ../");
            exit();
        }

        // Upload file
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            return basename($file['name']);
        }

        $_SESSION['message'] = "Terjadi kesalahan saat mengupload file";
        $_SESSION['message_type'] = "danger";
        header("Location: ../");
        exit();
    }
}
