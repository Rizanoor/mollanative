<?php

require_once __DIR__ . '/../models/ResumeModel.php';

class ResumeController
{
    private $resumeModel;

    public function __construct()
    {
        $this->resumeModel = new ResumeModel();
    }

    public function getResumes()
    {
        return $this->resumeModel->getAllResumes();
    }

    public function handleRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['delete_id'])) {
                $this->deleteResume($_POST['delete_id']);
            } else {
                $this->createResume();
            }
        }
    }

    public function createResume()
    {
        session_start();

        $category = $_POST['category'] ?? null;
        $institute_or_company = $_POST['institute_or_company'] ?? null;
        $course_or_position = $_POST['course_or_position'] ?? null;
        $duration_or_period = $_POST['duration_or_period'] ?? null;
        $description = $_POST['description'] ?? null;

        if (empty($category) || empty($institute_or_company)) {
            $_SESSION['message'] = "Category dan institute/company tidak boleh kosong!";
            $_SESSION['message_type'] = "danger";
            header("Location: ../admin/index.php?resume=true");
            exit();
        }

        try {
            $this->resumeModel->addResume($category, $institute_or_company, $course_or_position, $duration_or_period, $description);
            $_SESSION['message'] = "Resume berhasil ditambahkan!";
            $_SESSION['message_type'] = "success";
        } catch (Exception $e) {
            $_SESSION['message'] = "Gagal menambahkan resume: " . $e->getMessage();
            $_SESSION['message_type'] = "danger";
        }

        header("Location: ../admin/index.php?resume=true");
        exit();
    }


    public function deleteResume($id)
    {
        session_start();

        if ($id) {
            $this->resumeModel->deleteResume($id);
            $_SESSION['message'] = "Resume berhasil dihapus!";
            $_SESSION['message_type'] = "success";
        } else {
            $_SESSION['message'] = "Gagal menghapus resume!";
            $_SESSION['message_type'] = "danger";
        }

        header("Location: ../admin/index.php?resume=true");
        exit();
    }
}
