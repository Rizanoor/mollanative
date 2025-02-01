<?php
require_once __DIR__ . '/../models/ProjectModel.php';

class ProjectController
{
    private $projectModel;

    public function __construct()
    {
        $this->projectModel = new ProjectModel();
    }

    public function handleRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['delete_id'])) {
                $this->deleteProject($_POST['delete_id']);
            } else {
                $this->createProject();
            }
        }
    }

    public function getProjects()
    {
        return $this->projectModel->getAllProject();
    }

    public function createProject()
    {
        session_start();

        // Validasi input
        $name = $_POST['project_name'] ?? null;
        $link = $_POST['project_link'] ?? null;

        if (empty($name) || empty($link)) {
            $_SESSION['message'] = "Project name dan link tidak boleh kosong!";
            $_SESSION['message_type'] = "danger";
            header("Location: ../admin/index.php?project=true");
            exit();
        }

        // Validasi file upload
        if (isset($_FILES['project_photo']) && $_FILES['project_photo']['error'] === UPLOAD_ERR_OK) {
            // Proses upload foto
            $photoName = $this->uploadProjectPhoto($_FILES['project_photo']);

            // Menyimpan path foto ke database
            if ($photoName) {
                $photoPath = 'uploads/' . $photoName;  // Path relatif untuk penyimpanan di database
                $this->projectModel->createProject($name, $link, $photoPath);

                $_SESSION['message'] = "Project berhasil ditambahkan!";
                $_SESSION['message_type'] = "success";
            } else {
                $_SESSION['message'] = "Terjadi kesalahan saat mengupload foto!";
                $_SESSION['message_type'] = "danger";
            }
        } else {
            $_SESSION['message'] = "Harap unggah foto project!";
            $_SESSION['message_type'] = "danger";
        }

        header("Location: ../admin/index.php?project=true");
        exit();
    }

    private function uploadProjectPhoto($file)
    {
        $targetDir = __DIR__ . '/../uploads/';
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true); // Buat folder jika belum ada
        }

        $fileName = time() . '_' . basename($file['name']); // Tambahkan timestamp untuk menghindari duplikasi nama
        $targetFile = $targetDir . $fileName;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Validasi apakah file benar-benar gambar
        $validExtensions = ['jpg', 'jpeg', 'png'];
        if (!getimagesize($file['tmp_name']) || !in_array($imageFileType, $validExtensions)) {
            $_SESSION['message'] = "Ekstensi file harus jpg, jpeg, atau png!";
            $_SESSION['message_type'] = "danger";
            header("Location: ../admin/index.php?project=true");
            exit();
        }

        // Validasi ukuran file
        if ($file['size'] > 2 * 1024 * 1024) { // Maksimal 2MB
            $_SESSION['message'] = "Size file terlalu besar! Maksimal 2MB.";
            $_SESSION['message_type'] = "danger";
            header("Location: ../admin/index.php?project=true");
            exit();
        }

        // Upload file
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            return $fileName;
        }

        // Jika gagal upload
        $_SESSION['message'] = "Terjadi kesalahan saat mengupload file.";
        $_SESSION['message_type'] = "danger";
        header("Location: ../admin/index.php?project=true");
        exit();
    }


    public function deleteProject($id)
    {
        session_start();

        if ($id) {
            $this->projectModel->deleteProject($id);
            $_SESSION['message'] = "Project berhasil dihapus!";
            $_SESSION['message_type'] = "success";
        } else {
            $_SESSION['message'] = "Gagal menghapus project!";
            $_SESSION['message_type'] = "danger";
        }

        header("Location: ../admin/index.php?project=true");
        exit();
    }
}
